<x-guest-layout>
  <div class="mb-6 text-center sm:mb-8">
    <h1 class="mb-2 text-2xl font-bold text-white sm:text-3xl">{{ __('auth.password.confirm.title') }}</h1>
    <p class="text-sm text-gray-300 sm:text-base">{{ __('auth.password.confirm.subtitle') }}</p>
  </div>

  <form method="POST" action="{{ route('password.confirm') }}" class="space-y-4 sm:space-y-6">
    @csrf
    <div>
      <x-input-label for="password" :value="__('auth.password.confirm.password')" />
      <x-text-input
        id="password"
        class="mt-2 block w-full"
        type="password"
        name="password"
        required
        autocomplete="current-password"
      />
      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <div class="pt-2 sm:pt-4">
      <x-primary-button> {{ __('auth.password.confirm.confirm_button') }} </x-primary-button>
    </div>
  </form>
</x-guest-layout>
