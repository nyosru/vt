<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\User;
use Livewire\Component;

class Cabinet extends Component
{
	public $users = [];

	public function getMedals()
	{
		$is = Event::query();

//		// Применяем фильтр
//		if ($this->filterDate == 'old') {
//			$is->where('date', '<', now());
//		} elseif ($this->filterDate == 'new') {
//			$is->where('date', '>=', now());
//		}

		return $is->with([
			'photos',
			'rewards' => function ($query) {
				$query->orderBy('position', 'asc'); // Сортируем rewards по position
			},
			'rewards.user'
		])->get();
	}

	public function render()
	{

//		$this->users = User::all();
		// Получаем текущего авторизованного пользователя
		$this->now_user = auth()->user();

		// Загружаем связанные с пользователем награды (rewards) и события (events)
		$this->now_user->load([
			'rewards' => function ($query) {
				$query->with('event')->orderBy('position', 'asc');
			},
		]);

		return view('livewire.cabinet',[
			'medals' => $this->getMedals(),
			'now_user' => $this->now_user // Передаем в представление текущего пользователя

		]);

	}
}
