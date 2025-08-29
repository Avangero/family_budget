<x-guest-layout>
  <div class="mb-6 text-center sm:mb-8">
    <h1 class="mb-2 text-2xl font-bold text-white sm:text-3xl">{{ __('auth.password.reset.title') }}</h1>
    <p class="text-sm text-gray-300 sm:text-base">{{ __('auth.password.reset.subtitle') }}</p>
  </div>

  <form method="POST" action="{{ route('password.store') }}" class="space-y-4 sm:space-y-6">
    @csrf

    <input type="hidden" name="token" value="{{ $request->route('token') }}" />

    <div>
      <x-input-label for="email" :value="__('auth.password.reset.email')" />
      <x-text-input
        id="email"
        class="mt-2 block w-full"
        type="email"
        name="email"
        :value="old('email', $request->email)"
        required
        autofocus
        autocomplete="username"
      />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div>
      <x-input-label for="password" :value="__('auth.password.reset.password')" />
      <x-text-input
        id="password"
        class="mt-2 block w-full"
        type="password"
        name="password"
        required
        autocomplete="new-password"
      />
      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <div>
      <x-input-label for="password_confirmation" :value="__('auth.password.reset.confirm_password')" />
      <x-text-input
        id="password_confirmation"
        class="mt-2 block w-full"
        type="password"
        name="password_confirmation"
        required
        autocomplete="new-password"
      />
      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="pt-2 sm:pt-4">
      <x-primary-button> {{ __('auth.password.reset.reset_button') }} </x-primary-button>
    </div>

    <div class="border-t border-gray-700 pt-4 text-center sm:pt-6">
      <p class="text-sm text-gray-300">
        <a href="{{ route('login') }}" class="font-medium text-blue-400 transition-colors hover:text-blue-300">
          ← {{ __('auth.login.login_button') }}
        </a>
      </p>
    </div>
  </form>
</x-guest-layout>
