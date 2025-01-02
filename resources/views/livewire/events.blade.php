<div>
    <header class="bg-white shadow mb-4">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline mr-8">
                Мероприятия
            </h2>

            <button class="{{ $filterDate == 'old' ? 'bg-blue-400' : 'bg-blue-200' }} p-2"
                    wire:click.prevent="setFilter('old')">Уже прошли
            </button>
            <button class="{{ $filterDate == 'new' ? 'bg-blue-400' : 'bg-blue-200' }} p-2"
                    wire:click.prevent="setFilter('new')">В будущем
            </button>
            {{--            <span class="bg-blue-200 p-2">--}}
            {{--                $filterDate: {{ $filterDate ?? '-' }}--}}
            {{--            </span>--}}
        </div>
    </header>

    <div class="container mx-auto">
        <div class="grid gap-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach($items as $i)
                <div class="max-w-sm bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-orange-200 p-1 mb-1">{{ $i->date }}</div>
                    <div class="px-3 py-2">
                        <img src="{{ $i->photo_path }}" class="float-left pr-2" style="width: 200px;"/>
                        <div class="text-xl">{{ $i->name }}</div>
                        <br/>
                        <br/>
                        {{--                        photos:--}}
                        {{--                        <br/>--}}
                        {{--                        <pre>--}}
                        {{--                        {{ print_r($i->photos->toArray() ) }}--}}
                        {{--                        </pre>--}}

                        @foreach( $i->photos as $p )
                            <img src="{{ $p->path }}" style="width: 100px;" class="m-1 inline"/>
                        @endforeach
                        @if( count($i->rewards) > 0 )
                            <div class="text-2xl my-2">Медали:</div>

                            {{--                        rewards:--}}
                            {{--                        <br/>--}}
                            {{--                        <pre>--}}
                            {{--                                                {{ print_r($i->rewards->toArray() ) }}--}}
                            {{--                                                </pre>--}}
                            @foreach( $i->rewards as $r )
                                <div class="{{
                                ( $r->position == 1 ? 'bg-yellow-500' :
                                    ( $r->position == 2 ? 'bg-gray-400' :
                                        ( $r->position == 3 ? 'bg-yellow-800' : 'bg-gray-100' )
                                     )
                                 )
                                 }} shadow-md rounded p-2 mb-2">
                                    {{ $r->user->name }}
                                    <br/>
                                    @if( !empty($r->status) )
                                        Медаль {{ $r->status }},
                                    @endif
                                    Место: {{ $r->position }}
                                </div>
                            @endforeach
                        @endif


                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @if(1==2)
        <pre style="max-height: 150px; font-size: 10px; overflow: auto;">
        {{ print_r($items->toArray()) }}
    </pre>
    @endif

    {{--    <script>--}}
    {{--      document.addEventListener('DOMContentLoaded', function () {--}}
    {{--        window.addEventListener('update-url', event => {--}}
    {{--          const params = new URLSearchParams(window.location.search);--}}
    {{--          params.set('filter', event.detail.filter); // Убедитесь, что filter содержит корректное значение--}}
    {{--          history.pushState(null, '', `${window.location.pathname}?${params.toString()}`);--}}
    {{--        });--}}
    {{--      });--}}
    {{--    </script>--}}
</div>
