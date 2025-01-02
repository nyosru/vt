<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
	public $filterDate = 'new';

	public function mount()
	{
		// Устанавливаем фильтр из GET-параметров, если он существует
		$this->filterDate = request()->query('filter', 'new');
	}

	public function setFilter($type = 'new')
	{
		$this->filterDate = $type;

		// Отправляем событие для обновления URL на клиенте
		$this->dispatch('update-url', ['filter' => $type]);
	}

	public function render()
	{
		$is = Event::query();

		// Применяем фильтр
		if ($this->filterDate == 'old') {
			$is->orderBy('date', 'desc')->where('date', '<', now());
		} elseif ($this->filterDate == 'new') {
			$is->orderBy('date', 'asc')->where('date', '>=', now());
		}




		$items = $is->with([
			'photos',
			'rewards' => function ($query) {
				$query->orderBy('position', 'asc'); // Сортируем rewards по position
			},
			'rewards.user'
		])->get();

		return view('livewire.events', ['items' => $items]);
	}

}
