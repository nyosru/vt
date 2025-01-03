<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class NewsList extends Component
{
	use WithPagination;

	public function render()
	{
//		$items = News::orderBy('published_at', 'desc')->paginate(5);
		$items = News::latest()->paginate(5);
		return view(
			'livewire.news-list'
			, ['items' => $items]
		);
	}
}
