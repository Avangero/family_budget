<x-guest-layout>
    <div class="mb-6 text-center sm:mb-8">
        <h1 class="mb-2 text-2xl font-bold text-white sm:text-3xl">
            {{ __('auth.password.request.title') }}
        </h1>
        <p class="text-sm text-gray-300 sm:text-base">
            {{ __('auth.password.request.subtitle') }}
        </p>
    </div>

    <x-auth-session-status :status="session('status')" class="mb-6" />

    <form action="{{ route('password.email') }}" class="space-y-4 sm:space-y-6" method="POST">
        @csrf

        <div>
            <x-input-label :value="__('auth.password.request.email')" for="email" />
            <x-text-input :value="old('email')" autofocus class="mt-2 block w-full" id="email" name="email" required
                type="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="pt-2 sm:pt-4">
            <x-primary-button>
                {{ __('auth.password.request.send_button') }}
            </x-primary-button>
        </div>

        <div class="border-t border-gray-700 pt-4 text-center sm:pt-6">
            <p class="text-sm text-gray-300">
                <a class="font-medium text-blue-400 transition-colors hover:text-blue-300" href="{{ route('login') }}">
                    ← {{ __('auth.login.login_button') }}
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
