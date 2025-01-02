<div class="bg-green-300 py-10">
<nav class="-mx-3 xflex xflex-1 xjustify-end">
    @auth
        <a
{{--            href="{{ url('/dashboard') }}"--}}
            href="{{ route('clients') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition
            hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]
{{--            dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white--}}
            "
        >
            Перейти в CRM
        </a>
    @else
        <a
            href="{{ route('login') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition
            hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]
{{--            dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white--}}
            "
        >
            Войти
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition
                hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]
{{--                dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white--}}
                "
            >
                Зарегистрироваться
            </a>
        @endif
    @endauth
</nav>
</div>
