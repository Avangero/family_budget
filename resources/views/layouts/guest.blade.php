<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="bg-gray-900 font-sans text-white antialiased">
    <div class="pointer-events-none fixed inset-0">
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

    <div class="relative z-10 flex min-h-screen flex-col items-center px-4 pt-4 sm:justify-center sm:pt-0 sm:pt-6">
      <div class="mb-6 sm:mb-8">
        <a href="/" class="flex items-center space-x-2">
          <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-500 sm:h-12 sm:w-12">
            <svg class="h-6 w-6 text-white sm:h-7 sm:w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"
              ></path>
            </svg>
          </div>
          <span class="text-xl font-bold sm:text-2xl">FamilyBudget</span>
        </a>
      </div>

      <div
        class="w-full rounded-2xl border border-gray-700 bg-gray-800/80 px-4 py-6 shadow-2xl backdrop-blur-sm sm:max-w-md sm:px-6 sm:py-8"
      >
        {{ $slot }}
      </div>
    </div>
  </body>
</html>
