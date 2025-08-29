<section class="bg-gradient-to-r from-blue-600 to-blue-700 py-12 sm:py-20">
  <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
    <h2 class="mb-4 px-4 text-3xl font-bold text-white sm:mb-6 sm:text-4xl md:text-5xl">
      {{ __('welcome.cta.title') }}
    </h2>
    <p class="mb-6 px-4 text-lg text-blue-100 sm:mb-8 sm:text-xl">{{ __('welcome.cta.subtitle') }}</p>
    <a
      href="{{ route('register') }}"
      class="inline-block transform rounded-xl bg-white px-6 py-3 text-base font-semibold text-blue-600 shadow-lg transition-all hover:scale-105 hover:bg-gray-100 sm:px-8 sm:py-4 sm:text-lg"
    >
      {{ __('welcome.cta.button') }}
    </a>
  </div>
</section>
