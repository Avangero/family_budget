<footer id="contact" class="bg-gray-900 border-t border-gray-800 py-8 sm:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 sm:gap-8">
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center space-x-2 mb-4">
                    <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-white">FamilyBudget</span>
                </div>
                <p class="text-gray-400 mb-4 max-w-md text-sm sm:text-base">
                    {{ __('welcome.footer.description') }}
                </p>
            </div>

            <div>
                <h3 class="text-base sm:text-lg font-semibold text-white mb-3 sm:mb-4">{{ __('welcome.footer.product.title') }}</h3>
                <ul class="space-y-2 text-gray-400 text-sm sm:text-base">
                    <li><a href="#features" class="hover:text-white transition-colors">{{ __('welcome.footer.product.features') }}</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">{{ __('welcome.footer.product.security') }}</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">{{ __('welcome.footer.product.api') }}</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-base sm:text-lg font-semibold text-white mb-3 sm:mb-4">{{ __('welcome.footer.support.title') }}</h3>
                <ul class="space-y-2 text-gray-400 text-sm sm:text-base">
                    <li><a href="#" class="hover:text-white transition-colors">{{ __('welcome.footer.support.help') }}</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">{{ __('welcome.footer.support.contacts') }}</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">{{ __('welcome.footer.support.faq') }}</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-6 sm:mt-8 pt-6 sm:pt-8 text-center text-gray-400 text-sm sm:text-base">
            <p>{{ __('welcome.footer.copyright') }}</p>
        </div>
    </div>
</footer>
