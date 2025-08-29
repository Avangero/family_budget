<nav
  class="sticky top-0 z-50 border-b border-gray-800 bg-gray-900/95 backdrop-blur-sm"
  x-data="{ mobileMenuOpen: false }"
>
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center space-x-4 md:space-x-8">
        <div class="flex items-center space-x-2">
          <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-blue-500">
            <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"
              ></path>
            </svg>
          </div>
          <span class="text-lg font-bold md:text-xl">FamilyBudget</span>
        </div>

        <div class="hidden items-center space-x-6 md:flex">
          <a href="#features" class="text-gray-300 transition-colors hover:text-white"
            >{{ __('welcome.navigation.features') }}</a
          >
          <a href="#how-it-works" class="text-gray-300 transition-colors hover:text-white"
            >{{ __('welcome.navigation.how_it_works') }}</a
          >
          <a href="#contact" class="text-gray-300 transition-colors hover:text-white"
            >{{ __('welcome.navigation.contacts') }}</a
          >
        </div>
      </div>

      <div class="hidden items-center space-x-4 md:flex">
        @auth
        <a
          href="{{ url('/dashboard') }}"
          class="rounded-lg bg-blue-500 px-6 py-2 font-medium text-white transition-colors hover:bg-blue-600"
        >
          {{ __('welcome.navigation.dashboard') }}
        </a>
        @else
        <a href="{{ route('login') }}" class="text-gray-300 transition-colors hover:text-white">
          {{ __('welcome.navigation.login') }}
        </a>

        <a
          href="{{ route('register') }}"
          class="rounded-lg bg-blue-500 px-6 py-2 font-medium text-white transition-colors hover:bg-blue-600"
        >
          {{ __('welcome.navigation.register') }}
        </a>
        @endauth
      </div>

      <div class="md:hidden">
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-300 transition-colors hover:text-white">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path
              x-show="!mobileMenuOpen"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            ></path>
            <path
              x-show="mobileMenuOpen"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            ></path>
          </svg>
        </button>
      </div>
    </div>

    <div
      x-show="mobileMenuOpen"
      x-transition:enter="transition ease-out duration-200"
      x-transition:enter-start="opacity-0 transform -translate-y-2"
      x-transition:enter-end="opacity-100 transform translate-y-0"
      x-transition:leave="transition ease-in duration-150"
      x-transition:leave-start="opacity-100 transform translate-y-0"
      x-transition:leave-end="opacity-0 transform -translate-y-2"
      class="md:hidden"
    >
      <div class="space-y-1 border-t border-gray-800 px-2 pb-3 pt-2">
        <a
          href="#features"
          @click="mobileMenuOpen = false"
          class="block rounded-lg px-3 py-2 text-gray-300 transition-colors hover:bg-gray-800 hover:text-white"
          >{{ __('welcome.navigation.features') }}</a
        >
        <a
          href="#how-it-works"
          @click="mobileMenuOpen = false"
          class="block rounded-lg px-3 py-2 text-gray-300 transition-colors hover:bg-gray-800 hover:text-white"
          >{{ __('welcome.navigation.how_it_works') }}</a
        >
        <a
          href="#contact"
          @click="mobileMenuOpen = false"
          class="block rounded-lg px-3 py-2 text-gray-300 transition-colors hover:bg-gray-800 hover:text-white"
          >{{ __('welcome.navigation.contacts') }}</a
        >

        <div class="pt-4">
          @auth
          <a
            href="{{ url('/dashboard') }}"
            @click="mobileMenuOpen = false"
            class="block w-full rounded-lg bg-blue-500 px-4 py-2 text-center font-medium text-white transition-colors hover:bg-blue-600"
          >
            {{ __('welcome.navigation.dashboard') }}
          </a>
          @else
          <div class="flex space-x-2">
            <a
              href="{{ route('login') }}"
              @click="mobileMenuOpen = false"
              class="flex-1 rounded-lg border border-gray-600 bg-gray-700 px-4 py-2 text-center font-medium text-white transition-colors hover:bg-gray-600"
            >
              {{ __('welcome.navigation.login') }}
            </a>

            <a
              href="{{ route('register') }}"
              @click="mobileMenuOpen = false"
              class="flex-1 rounded-lg bg-blue-500 px-4 py-2 text-center font-medium text-white transition-colors hover:bg-blue-600"
            >
              {{ __('welcome.navigation.register') }}
            </a>
          </div>
          @endauth
        </div>
      </div>
    </div>
  </div>
</nav>
