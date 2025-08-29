@props(['value'])

<label {{ $attributes-
  >merge(['class' => 'block font-medium text-sm sm:text-base text-white']) }}> {{ $value ?? $slot }}
</label>
