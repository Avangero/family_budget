<footer id="contact" class="border-t border-gray-800 bg-gray-900 py-8 sm:py-12">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-6 sm:gap-8 md:grid-cols-4">
      <div class="col-span-1 md:col-span-2">
        <div class="mb-4 flex items-center space-x-2">
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
          <span class="text-xl font-bold text-white">FamilyBudget</span>
        </div>
        <p class="mb-4 max-w-md text-sm text-gray-400 sm:text-base">{{ __('welcome.footer.description') }}</p>
      </div>

      <div>
        <h3 class="mb-3 text-base font-semibold text-white sm:mb-4 sm:text-lg">
          {{ __('welcome.footer.product.title') }}
        </h3>
        <ul class="space-y-2 text-sm text-gray-400 sm:text-base">
          <li>
            <a href="#features" class="transition-colors hover:text-white"
              >{{ __('welcome.footer.product.features') }}</a
            >
          </li>
          <li>
            <a href="#" class="transition-colors hover:text-white">{{ __('welcome.footer.product.security') }}</a>
          </li>
          <li><a href="#" class="transition-colors hover:text-white">{{ __('welcome.footer.product.api') }}</a></li>
        </ul>
      </div>

      <div>
        <h3 class="mb-3 text-base font-semibold text-white sm:mb-4 sm:text-lg">
          {{ __('welcome.footer.support.title') }}
        </h3>
        <ul class="space-y-2 text-sm text-gray-400 sm:text-base">
          <li><a href="#" class="transition-colors hover:text-white">{{ __('welcome.footer.support.help') }}</a></li>
          <li>
            <a href="#" class="transition-colors hover:text-white">{{ __('welcome.footer.support.contacts') }}</a>
          </li>
          <li><a href="#" class="transition-colors hover:text-white">{{ __('welcome.footer.support.faq') }}</a></li>
        </ul>
      </div>
    </div>
    <div class="mt-6 border-t border-gray-800 pt-6 text-center text-sm text-gray-400 sm:mt-8 sm:pt-8 sm:text-base">
      <p>{{ __('welcome.footer.copyright') }}</p>
    </div>
  </div>
</footer>
