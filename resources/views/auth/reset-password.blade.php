<x-guest-layout>
    <div class="text-center mb-6 sm:mb-8">
        <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2">
            {{ __('auth.password.reset.title') }}
        </h1>
        <p class="text-gray-300 text-sm sm:text-base">
            {{ __('auth.password.reset.subtitle') }}
        </p>
    </div>

    <form method="POST" action="{{ route('password.store') }}" class="space-y-4 sm:space-y-6">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div>
            <x-input-label for="email" :value="__('auth.password.reset.email')" />
            <x-text-input id="email" class="block mt-2 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('auth.password.reset.password')" />
            <x-text-input id="password" class="block mt-2 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('auth.password.reset.confirm_password')" />
            <x-text-input id="password_confirmation" class="block mt-2 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="pt-2 sm:pt-4">
            <x-primary-button>
                {{ __('auth.password.reset.reset_button') }}
            </x-primary-button>
        </div>

        <div class="text-center pt-4 sm:pt-6 border-t border-gray-700">
            <p class="text-sm text-gray-300">
                <a href="{{ route('login') }}" class="text-blue-400 hover:text-blue-300 transition-colors font-medium">
                    ← {{ __('auth.login.login_button') }}
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
