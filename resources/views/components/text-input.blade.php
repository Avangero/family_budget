@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes- />merge(['class' => 'w-full px-3 sm:px-4 py-2.5 sm:py-3 bg-gray-800 border
border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-colors
text-base']) }}>
