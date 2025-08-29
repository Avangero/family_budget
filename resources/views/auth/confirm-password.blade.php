<x-guest-layout>
    <div class="text-center mb-6 sm:mb-8">
        <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2">
            {{ __('auth.password.confirm.title') }}
        </h1>
        <p class="text-gray-300 text-sm sm:text-base">
            {{ __('auth.password.confirm.subtitle') }}
        </p>
    </div>

    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-4 sm:space-y-6">
        @csrf
        <div>
            <x-input-label for="password" :value="__('auth.password.confirm.password')" />
            <x-text-input id="password" class="block mt-2 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="pt-2 sm:pt-4">
            <x-primary-button>
                {{ __('auth.password.confirm.confirm_button') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
