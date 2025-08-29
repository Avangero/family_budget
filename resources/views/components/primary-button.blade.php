<button {{ $attributes->
  merge(['type' => 'submit', 'class' => 'w-full bg-blue-500 hover:bg-blue-600 text-white px-4 sm:px-6 py-2.5 sm:py-3
  rounded-lg font-semibold transition-colors text-base']) }}> {{ $slot }}
</button>
