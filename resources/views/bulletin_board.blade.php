<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- livewireStyles -->
    @livewireStyles
</head>
<body>
<section class="header bg-blue-200 bg-opacity-50">
    <div class="header-wrap" style="display: flex; justify-content: space-around; align-items: center">
        <div class="header-left">
            <h1 style="font-size: medium">Laravel検証</h1>
        </div>
        <div class="header-right">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-jet-dropdown-link href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-jet-dropdown-link>
            </form>
        </div>
    </div>
</section>

<section class="bulletin-board my-8">
    <h2 class="text-center mb-4">投稿一覧</h2>
    <div class="bulletin-board-wrap w-5/6 flex justify-center mx-auto">
        @livewire('bulletin-board')
    </div>
</section>

<!-- livewireScripts -->
@livewireScripts

</body>
</html>
