<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\Photo;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class PhotoList extends Component
{
    use WithPagination;

    public $eventId = '';
    public $userId = '';

    /**
     * Обновление пагинации при изменении фильтра мероприятий.
     */
    public function updatedEventId()
    {
        $this->resetPage();
    }

    /**
     * Обновление пагинации при изменении фильтра пользователей.
     */
    public function updatedUserId()
    {
        $this->resetPage();
    }

    public function filterByEvent()
    {
        // Это вызовет render() автоматически.
    }

    /**
     * Рендеринг компонента.
     */
    public function render()
    {
        $query = Photo::query();

        if (!empty($this->eventId)) {
            $query->where('event_id', $this->eventId);
        }

        if (!empty($this->userId)) {
            $query->where('user_id', $this->userId);
        }

        $photos = $query->with(['event', 'user'])->paginate(12);

        return view('livewire.photo-list', [
            'photos' => $photos,
            'events' => Event::all(),
            'users' => User::all(),
        ]);
    }
}
