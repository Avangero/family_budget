<x-guest-layout>
  <div class="mb-6 text-center sm:mb-8">
    <h1 class="mb-2 text-2xl font-bold text-white sm:text-3xl">{{ __('auth.login.title') }}</h1>
    <p class="text-sm text-gray-300 sm:text-base">{{ __('auth.login.subtitle') }}</p>
  </div>

  <x-auth-session-status class="mb-6" :status="session('status')" />

  <form method="POST" action="{{ route('login') }}" class="space-y-4 sm:space-y-6">
    @csrf

    <div>
      <x-input-label for="email" :value="__('auth.login.email')" />
      <x-text-input
        id="email"
        class="mt-2 block w-full"
        type="email"
        name="email"
        :value="old('email')"
        required
        autofocus
        autocomplete="username"
      />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div>
      <x-input-label for="password" :value="__('auth.login.password')" />
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

    <div class="flex items-center justify-between">
      <label for="remember_me" class="inline-flex items-center">
        <input
          id="remember_me"
          type="checkbox"
          class="rounded border-gray-700 bg-gray-800 text-blue-500 focus:ring-blue-500 focus:ring-offset-gray-800"
          name="remember"
        />
        <span class="ms-2 text-sm text-gray-300">{{ __('auth.login.remember_me') }}</span>
      </label>

      @if (Route::has('password.request'))
      <a class="text-sm text-gray-300 transition-colors hover:text-white" href="{{ route('password.request') }}">
        {{ __('auth.login.forgot_password') }}
      </a>
      @endif
    </div>

    <div class="pt-2 sm:pt-4">
      <x-primary-button> {{ __('auth.login.login_button') }} </x-primary-button>
    </div>

    <div class="border-t border-gray-700 pt-4 text-center sm:pt-6">
      <p class="text-sm text-gray-300">
        {{ __('auth.login.no_account') }}
        <a href="{{ route('register') }}" class="font-medium text-blue-400 transition-colors hover:text-blue-300">
          {{ __('auth.login.register_link') }}
        </a>
      </p>
    </div>
  </form>
</x-guest-layout>
