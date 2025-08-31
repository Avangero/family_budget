<x-guest-layout>
    <div class="mb-6 text-center sm:mb-8">
        <h1 class="mb-2 text-2xl font-bold text-white sm:text-3xl">
            {{ __('auth.register.title') }}
        </h1>
        <p class="text-sm text-gray-300 sm:text-base">
            {{ __('auth.register.subtitle') }}
        </p>
    </div>

    <form action="{{ route('register') }}" class="space-y-4 sm:space-y-6" method="POST">
        @csrf

        <div>
            <x-input-label :value="__('auth.register.name')" for="name" />
            <x-text-input :value="old('name')" autocomplete="name" autofocus class="mt-2 block w-full" id="name"
                name="name" required type="text" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label :value="__('auth.register.email')" for="email" />
            <x-text-input :value="old('email')" autocomplete="username" class="mt-2 block w-full" id="email"
                name="email" required type="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label :value="__('auth.register.password')" for="password" />
            <x-text-input autocomplete="new-password" class="mt-2 block w-full" id="password" name="password" required
                type="password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label :value="__('auth.register.confirm_password')" for="password_confirmation" />
            <x-text-input autocomplete="new-password" class="mt-2 block w-full" id="password_confirmation"
                name="password_confirmation" required type="password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="pt-2 sm:pt-4">
            <x-primary-button>
                {{ __('auth.register.register_button') }}
            </x-primary-button>
        </div>

        <div class="border-t border-gray-700 pt-4 text-center sm:pt-6">
            <p class="text-sm text-gray-300">
                {{ __('auth.register.already_registered') }}
                <a class="font-medium text-blue-400 transition-colors hover:text-blue-300" href="{{ route('login') }}">
                    {{ __('auth.register.login_link') }}
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
