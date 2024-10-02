<!DOCTYPE html>
<link rel="stylesheet" href="{{ asset('css/style-welcome.css') }}">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bem-Vindo</title>

</head>

<body>
    <div class="logo">
        <img src="{{ asset('img/favicon.png') }}" alt="Logo SMK Enterprise" style="max-width: 200px;">
    </div>
    <div class="welcome">
        <h1>BEM VINDO <br>AO SMK ENTERPRISE</h1>
        <h3>Acesse abaixo para entrar...</h3>


        <div class="login">
            @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Dashboard
                </a>
                @else
                <a
                    id="a1"
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Login
                </a>

                @if (Route::has('register'))
                <a
                    id="a2"
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Registrar
                </a>
                @endif
                @endauth
            </nav>
            @endif
        </div>
    </div>
    @include('components.footer')
</body>

</html>