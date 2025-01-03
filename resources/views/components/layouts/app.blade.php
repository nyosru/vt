<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
{{--            @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
{{--    @livewireStyles--}}
    {{--    @vite(['resources/js/app.js'])--}}
        <link href="/css/output.css?r={{ filemtime(public_path('/css/output.css')) }}" rel="stylesheet">
</head>

<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    <livewire:layout.navigation/>
    <main>
        {{ $slot }}
    </main>
</div>
<div class="footer1 text-center text-gray-600" >
<div class="footer2 text-center text-gray-600" >
<div class="footer3 text-center text-gray-600" >
    Все права защищены {{ date('Y') }}
</div>
</div>
</div>
</body>
{{--@livewireScriptConfig--}}
</html>
