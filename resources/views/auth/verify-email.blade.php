<x-guest-layout>
    <div class="text-center mb-6 sm:mb-8">
        <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2">
            {{ __('auth.verify_email.title') }}
        </h1>
        <p class="text-gray-300 text-sm sm:text-base">
            {{ __('auth.verify_email.subtitle') }}
        </p>
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-6 p-4 bg-green-500/10 border border-green-500/20 rounded-lg">
            <p class="text-sm text-green-400">
                {{ __('auth.verify_email.link_sent') }}
            </p>
        </div>
    @endif

    <div class="space-y-4 sm:space-y-6">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <x-primary-button>
                {{ __('auth.verify_email.resend_button') }}
            </x-primary-button>
        </form>

        <div class="text-center pt-4 sm:pt-6 border-t border-gray-700">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm text-gray-300 hover:text-white transition-colors">
                    {{ __('auth.verify_email.logout_button') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
