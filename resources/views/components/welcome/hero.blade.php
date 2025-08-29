<section class="relative min-h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
        <div class="sky-container absolute w-full h-full transform rotate-45">
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

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-20 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="space-y-6 sm:space-y-8">

                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-tight px-4">
                    {{ __('welcome.hero.title_prefix') }}
                    <span class="bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">
                        {{ __('welcome.hero.title_highlight') }}
                    </span>
                    {{ __('welcome.hero.title_suffix') }}
                </h1>

                <p class="text-lg sm:text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto px-4">
                    {{ __('welcome.hero.subtitle') }}
                </p>

                <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto px-4">
                    <div class="flex-1">
                        <input type="email" placeholder="{{ __('welcome.hero.email_placeholder') }}" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-colors text-base">
                    </div>
                    <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 sm:px-8 py-3 rounded-lg font-semibold text-center transition-colors whitespace-nowrap text-base">
                        {{ __('welcome.hero.cta_button') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
