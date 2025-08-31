<section class="py-12 sm:py-20 bg-gradient-to-r from-blue-600 to-blue-700">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4 sm:mb-6 px-4">
            {{ __('welcome.cta.title') }}
        </h2>
        <p class="text-lg sm:text-xl text-blue-100 mb-6 sm:mb-8 px-4">
            {{ __('welcome.cta.subtitle') }}
        </p>
        <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-gray-100 px-6 sm:px-8 py-3 sm:py-4 rounded-xl font-semibold text-base sm:text-lg transition-all transform hover:scale-105 shadow-lg inline-block">
            {{ __('welcome.cta.button') }}
        </a>
    </div>
</section>
