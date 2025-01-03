<div class="gradient-animation pb-5" style="margin-top: -10px;">

    <header class="bg-white shadow mb-4">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline mr-8">
                Новости
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


    {{--    <pre style="max-height: 200px; font-size: 12px; overflow: auto;">--}}
    {{--        {{ print_r($items->toArray()) }}--}}
    {{--    </pre>--}}
    <div class="container mx-auto">
        @foreach( $items as $i )
            <a href="{{ route('news.single',[ 'id' => $i->id ] ) }}" wire:navigate>
                <div class="p-3 my-2 rounded-xl
{{--        bg-gradient-to-br to-blue-100 from-cyan-100--}}
        ">
                    <img src="{{ $i->photo }}" style="float:left;" class="mr-2 mb-2 w-[20rem] rounded-xl"/>
                    <span class="text-2xl">{{ $i->title }}</span>
                    <br/>
                    <span class="bg-yellow-400 p-1">{{ date('Y-m-d',strtotime($i->published_at)) }}</span>
                    {{--                <br/>--}}
                    {{--                {{ $i->description }}--}}
                    {{--                <br/>--}}
                    <br clear="all"/>

                </div>
            </a>
        @endforeach

        {{ $items->onEachSide(2)->links('pagination::tailwind') }}

    </div>

</div>
