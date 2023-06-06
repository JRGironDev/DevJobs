@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm text-gray-600 font-bold mb-1']) }}>
    {{ $value ?? $slot }}
</label>
