<x-guest-layout>
  <div class="mb-6 text-center sm:mb-8">
    <h1 class="mb-2 text-2xl font-bold text-white sm:text-3xl">{{ __('auth.verify_email.title') }}</h1>
    <p class="text-sm text-gray-300 sm:text-base">{{ __('auth.verify_email.subtitle') }}</p>
  </div>

  @if (session('status') == 'verification-link-sent')
  <div class="mb-6 rounded-lg border border-green-500/20 bg-green-500/10 p-4">
    <p class="text-sm text-green-400">{{ __('auth.verify_email.link_sent') }}</p>
  </div>
  @endif

  <div class="space-y-4 sm:space-y-6">
    <form method="POST" action="{{ route('verification.send') }}">
      @csrf
      <x-primary-button> {{ __('auth.verify_email.resend_button') }} </x-primary-button>
    </form>

    <div class="border-t border-gray-700 pt-4 text-center sm:pt-6">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-sm text-gray-300 transition-colors hover:text-white">
          {{ __('auth.verify_email.logout_button') }}
        </button>
      </form>
    </div>
  </div>
</x-guest-layout>
