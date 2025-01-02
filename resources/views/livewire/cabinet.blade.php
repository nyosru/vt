<div>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Личный кабинет
            </h2>
        </div>
    </header>

    {{--    <pre style="max-height: 150px; font-size: 10px; overflow: auto;">{{ print_r($users->toArray()) }}</pre>--}}

    <div class="container mx-auto">
        <div class="flex w-full xh-48 bg-gray-200">
            <div class="border w-1/5 bg-red-300">
                <img src="/icon/User_icon_2.svg" alt="placeholder" class="mx-auto"
                     style="width: 150px; height: 150px;"/>
            </div>
            <div class="border grow bg-blue-300">
                ФИО
                <br/>
                {{ auth()->user()->name ?? 'Гость' }}
                {{--                <br/>--}}
                {{--                Дата рождения--}}
                {{--                <br/>--}}
                {{--                Статус--}}
            </div>
            <div class="border grow bg-green-300">

            </div>
        </div>

        <div class="flex w-full h-48 bg-gray-200">
            <div class="border w-1/3 bg-red-300">
                медальки
                {{--                <img src="/icon/photo.svg" alt="placeholder" class="mx-auto"--}}
                {{--                     style="width: 150px; height: 150px;"/>--}}
            </div>
            <div class="border grow bg-green-300 p-3">
                {{--                <div class="inline bg-yellow-500 p-2 m-2 rounded">строчка</div>--}}
                {{--                <div class="inline bg-yellow-500 p-2 m-2 rounded">строчка</div>--}}
                {{--                <div class="inline bg-yellow-500 p-2 m-2 rounded">строчка</div>--}}
                {{--                <div class="inline bg-yellow-500 p-2 m-2 rounded">строчка</div>--}}
                {{--                <div class="inline bg-yellow-500 p-2 m-2 rounded">строчка</div>--}}
                {{--                --}}{{--                <div class="block-inline bg-yellow-500 p-2 m-2 rounded" >строчка</div>--}}
                {{--                --}}{{--                <div class="block-inline bg-yellow-500 p-2 m-2 rounded" >строчка</div>--}}
                {{--                --}}{{--                <div class="block-inline bg-yellow-500 p-2 m-2 rounded" >строчка</div>--}}
                {{--                --}}{{--                <div class="block-inline bg-yellow-500 p-2 m-2 rounded" >строчка</div>--}}


                {{--                медальки медальки медальки медальки--}}
                {{--                <div style="height: auto;">--}}
                {{--                <pre style="max-height: 150px; overflow: auto;">--}}
                {{--                    {{print_r( $now_user->rewards )}}--}}
                {{--                        </pre>--}}

                @foreach( $now_user->rewards as $re )
                    <div class="bg-orange-300 p-2 m-2 rounded">
                        {{--                    <pre>--}}
                        {{--                {{ print_r($re,true) }}--}}
                        {{--                </pre>--}}
                        НАзвание мероприятия: {{ $re->event->name }}<br/>
                        дата мероприятия: {{ $re->event->date }}<br/>
                        --<br/>
                        НАзвание награды: {{ $re->name }}<br/>
                        {{--        [event_id] => 19--}}
                        {{--        [user_id] => 2--}}
                        дата награды: {{ $re->award_date  }}<br/>
                        тип награды: {{ $re->status }}<br/>
                        место: {{ $re->position }}<br/>
                    </div>
                @endforeach
                {{--                </div>--}}

            </div>
        </div>
        <div class="flex w-full h-48 xbg-gray-200">
            <div class="border w-1/3 bg-yellow-200">
                <img src="/icon/photo.svg" alt="placeholder" class="mx-auto"
                     style="width: 150px; height: 150px;"/>
            </div>
            <div class="border grow bg-green-200 p-3">
                <div class="inline bg-yellow-500 p-2 m-2 rounded">строчка</div>
                <div class="inline bg-yellow-500 p-2 m-2 rounded">строчка</div>
                <div class="inline bg-yellow-500 p-2 m-2 rounded">строчка</div>
                <div class="inline bg-yellow-500 p-2 m-2 rounded">строчка</div>
                <div class="inline bg-yellow-500 p-2 m-2 rounded">строчка</div>
                {{--                <div class="block-inline bg-yellow-500 p-2 m-2 rounded" >строчка</div>--}}
                {{--                <div class="block-inline bg-yellow-500 p-2 m-2 rounded" >строчка</div>--}}
                {{--                <div class="block-inline bg-yellow-500 p-2 m-2 rounded" >строчка</div>--}}
                {{--                <div class="block-inline bg-yellow-500 p-2 m-2 rounded" >строчка</div>--}}
            </div>
        </div>
    </div>

</div>
