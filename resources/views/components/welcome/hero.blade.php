<section class="relative flex min-h-screen items-center overflow-hidden">
  <div class="pointer-events-none absolute inset-0">
    <div class="sky-container absolute h-full w-full rotate-45 transform">
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
    </div>
  </div>

  <div class="relative z-10 mx-auto max-w-7xl px-4 py-12 sm:px-6 sm:py-20 lg:px-8">
    <div class="mx-auto max-w-4xl text-center">
      <div class="space-y-6 sm:space-y-8">
        <h1 class="px-4 text-4xl font-bold leading-tight sm:text-5xl md:text-6xl lg:text-7xl">
          {{ __('welcome.hero.title_prefix') }}
          <span class="bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">
            {{ __('welcome.hero.title_highlight') }}
          </span>
          {{ __('welcome.hero.title_suffix') }}
        </h1>

        <p class="mx-auto max-w-2xl px-4 text-lg text-gray-300 sm:text-xl md:text-2xl">
          {{ __('welcome.hero.subtitle') }}
        </p>

        <div class="mx-auto flex max-w-md flex-col gap-4 px-4 sm:flex-row">
          <div class="flex-1">
            <input
              type="email"
              placeholder="{{ __('welcome.hero.email_placeholder') }}"
              class="w-full rounded-lg border border-gray-700 bg-gray-800 px-4 py-3 text-base text-white placeholder-gray-400 transition-colors focus:border-blue-500 focus:outline-none"
            />
          </div>
          <a
            href="{{ route('register') }}"
            class="whitespace-nowrap rounded-lg bg-blue-500 px-6 py-3 text-center text-base font-semibold text-white transition-colors hover:bg-blue-600 sm:px-8"
          >
            {{ __('welcome.hero.cta_button') }}
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
