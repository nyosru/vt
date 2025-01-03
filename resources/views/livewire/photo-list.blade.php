<div>

    <header class="bg-white shadow mb-4">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline mr-8">
                Фото
            </h2>

{{--            <button class="{{ $filterDate == 'old' ? 'bg-blue-400' : 'bg-blue-200' }} p-2"--}}
{{--                    wire:click.prevent="setFilter('old')">Уже прошли--}}
{{--            </button>--}}
{{--            <button class="{{ $filterDate == 'new' ? 'bg-blue-400' : 'bg-blue-200' }} p-2"--}}
{{--                    wire:click.prevent="setFilter('new')">В будущем--}}
{{--            </button>--}}
            {{--            <span class="bg-blue-200 p-2">--}}
            {{--                $filterDate: {{ $filterDate ?? '-' }}--}}
            {{--            </span>--}}
        </div>
    </header>


    <div class="mx-auto p-4">
        <!-- Фильтры -->
        <div class="flex justify-between mb-4">
            <!-- Фильтр мероприятий -->
            <select wire:model.live="eventId"
                    wire:change="filterByEvent"
{{--                    wire:key="event"--}}
                    class="border rounded-md px-3 py-2 mr-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                <option value="">Все мероприятия</option>
                @foreach($events as $event)
                    <option value="{{ $event->id }}">
                        ({{ $event->id }})
                        {{ $event->name }}
                    </option>
                @endforeach
            </select>
            eventId: {{ $eventId }}
            <!-- Фильтр пользователей -->
            <select wire:model.live="userId"
                    wire:key="{{ $eventId }}"
                    class="border rounded-md px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                <option value="">Все пользователи</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            userId: {{ $userId }}
        </div>

        <!-- Галерея плитками -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @forelse($photos as $photo)
                <div class="border rounded-lg overflow-hidden cursor-pointer hover:shadow-md"
                     wire:click="$emit('openModal', '{{ asset('storage/' . $photo->path) }}')">
                    <img
{{--                            src="{{ asset('storage/' . $photo->path) }}"--}}
                            src="{{ $photo->path }}"
                         alt="Фото"
                         class="w-full h-48 object-cover">
                    #{{ $photo->id }} ( user {{ $photo->user_id }} / event  {{ $photo->event_id }} )
                </div>
            @empty
                <div class="col-span-full text-center text-gray-500">
                    Нет фотографий, соответствующих выбранным фильтрам.
                </div>
            @endforelse
        </div>

        <!-- Пагинация -->
        <div class="mt-4">
            {{--            {{ $photos->links() }}--}}
            {{ $photos->onEachSide(2)->links('pagination::tailwind') }}
{{--            {{ $photos->onEachSide(2)->links('livewire.any-pagination') }}--}}
        </div>
    </div>

    <!-- Tailwind модальное окно -->
    <div id="modal" class="fixed inset-0 hidden z-50 bg-black bg-opacity-75 flex items-center justify-center">
        <div class="relative bg-white rounded-lg shadow-lg w-11/12 max-w-3xl">
            <button class="absolute top-2 right-2 text-gray-400 hover:text-gray-600" id="closeModal">
                ✖
            </button>
            <div class="p-4">
                <img id="modalImage" class="max-w-full max-h-[80vh] object-contain mx-auto" src="" alt="Фото">
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            window.addEventListener('openModal', event => {
                const modal = document.getElementById('modal');
                const img = document.getElementById('modalImage');
                img.src = event.detail;
                modal.classList.remove('hidden');
            });

            document.getElementById('closeModal').addEventListener('click', () => {
                document.getElementById('modal').classList.add('hidden');
            });

            document.getElementById('modal').addEventListener('click', (e) => {
                if (e.target.id === 'modal') {
                    document.getElementById('modal').classList.add('hidden');
                }
            });
        </script>
    @endpush
</div>
