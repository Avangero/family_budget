<x-guest-layout>
    <div class="mb-6 text-center sm:mb-8">
        <h1 class="mb-2 text-2xl font-bold text-white sm:text-3xl">
            {{ __('auth.login.title') }}
        </h1>
        <p class="text-sm text-gray-300 sm:text-base">
            {{ __('auth.login.subtitle') }}
        </p>
    </div>

    <x-auth-session-status :status="session('status')" class="mb-6" />

    <form action="{{ route('login') }}" class="space-y-4 sm:space-y-6" method="POST">
        @csrf

        <div>
            <x-input-label :value="__('auth.login.email')" for="email" />
            <x-text-input :value="old('email')" autocomplete="username" autofocus class="mt-2 block w-full" id="email"
                name="email" required type="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label :value="__('auth.login.password')" for="password" />
            <x-text-input autocomplete="current-password" class="mt-2 block w-full" id="password" name="password"
                required type="password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between">
            <label class="inline-flex items-center" for="remember_me">
                <input
                    class="rounded border-gray-700 bg-gray-800 text-blue-500 focus:ring-blue-500 focus:ring-offset-gray-800"
                    id="remember_me" name="remember" type="checkbox">
                <span class="ms-2 text-sm text-gray-300">{{ __('auth.login.remember_me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-gray-300 transition-colors hover:text-white"
                    href="{{ route('password.request') }}">
                    {{ __('auth.login.forgot_password') }}
                </a>
            @endif
        </div>

        <div class="pt-2 sm:pt-4">
            <x-primary-button>
                {{ __('auth.login.login_button') }}
            </x-primary-button>
        </div>

        <div class="border-t border-gray-700 pt-4 text-center sm:pt-6">
            <p class="text-sm text-gray-300">
                {{ __('auth.login.no_account') }}
                <a class="font-medium text-blue-400 transition-colors hover:text-blue-300"
                    href="{{ route('register') }}">
                    {{ __('auth.login.register_link') }}
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
