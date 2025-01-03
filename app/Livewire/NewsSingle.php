<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsSingle extends Component
{
	public $id;
	public $new;

	public function mount($id)
	{
		$this->id = $id;
		$this->new = News::findOrFail($this->id);
	}

	public function render()
    {
        return view('livewire.news-single',['i'=>$this->new]);
    }
}
