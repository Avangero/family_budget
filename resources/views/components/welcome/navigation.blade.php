<nav class="bg-gray-900/95 backdrop-blur-sm border-b border-gray-800 sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-4 md:space-x-8">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <span class="text-lg md:text-xl font-bold">FamilyBudget</span>
                </div>

                <div class="hidden md:flex items-center space-x-6">
                    <a href="#features" class="text-gray-300 hover:text-white transition-colors">{{ __('welcome.navigation.features') }}</a>
                    <a href="#how-it-works" class="text-gray-300 hover:text-white transition-colors">{{ __('welcome.navigation.how_it_works') }}</a>
                    <a href="#contact" class="text-gray-300 hover:text-white transition-colors">{{ __('welcome.navigation.contacts') }}</a>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg font-medium transition-colors">
                        {{ __('welcome.navigation.dashboard') }}
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-300 hover:text-white transition-colors">
                        {{ __('welcome.navigation.login') }}
                    </a>

                    <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg font-medium transition-colors">
                        {{ __('welcome.navigation.register') }}
                    </a>
                @endauth
            </div>

            <div class="md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-300 hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 border-t border-gray-800">
                <a href="#features" @click="mobileMenuOpen = false" class="block px-3 py-2 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-colors">{{ __('welcome.navigation.features') }}</a>
                <a href="#how-it-works" @click="mobileMenuOpen = false" class="block px-3 py-2 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-colors">{{ __('welcome.navigation.how_it_works') }}</a>
                <a href="#contact" @click="mobileMenuOpen = false" class="block px-3 py-2 text-gray-300 hover:text-white hover:bg-gray-800 rounded-lg transition-colors">{{ __('welcome.navigation.contacts') }}</a>

                <div class="pt-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" @click="mobileMenuOpen = false" class="block w-full text-center bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                            {{ __('welcome.navigation.dashboard') }}
                        </a>
                    @else
                        <div class="flex space-x-2">
                            <a href="{{ route('login') }}" @click="mobileMenuOpen = false" class="flex-1 text-center bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg font-medium transition-colors border border-gray-600">
                                {{ __('welcome.navigation.login') }}
                            </a>

                            <a href="{{ route('register') }}" @click="mobileMenuOpen = false" class="flex-1 text-center bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                {{ __('welcome.navigation.register') }}
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>
