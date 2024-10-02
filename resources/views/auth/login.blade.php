<link rel="stylesheet" href="{{ asset('css/style-login.css') }}">
<!-- status da sessão -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<div>
    <img src="{{asset('img/logo.png')}}" alt="">
</div>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="caixa-texto">
        <!-- Digitar Email -->
        <div class="email">
            <x-input-label for="email" :value="__('E-mail:')" />
            <x-text-input class="input" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Digitar senha -->
        <div class="senha">
            <x-input-label for="password" :value="__('Senha:')" />

            <x-text-input id="password" class="input"
                type="password"
                name="password"
                required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
    </div>
    <!-- Lembre de mim -->
    <div class="lembre-de-mim">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Lembre de mim') }}</span>
        </label>
    </div>

    <div class="botton-entrar">
        <x-primary-button class="botao">
            {{ __('Entrar') }}
        </x-primary-button>
    </div>
    <div class="options">
        <div class="esqueceu-senha">
            @if (Route::has('password.request'))
           <a id="text-options" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                {{ __('Esqueceu a senha?') }}
            </a>
            @endif
        </div>
        <div>
            <a class="text-options" href="/register">Registrar</a>
        </div>
    </div>
</form>

<div class="footer">
    @include('components.footer')
</div>