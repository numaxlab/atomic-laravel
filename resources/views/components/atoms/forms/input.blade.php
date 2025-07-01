@props(['disabled' => false, 'readonly' => false])

<input
    {{ $disabled ? 'disabled' : '' }}
    {{ $readonly ? 'readonly' : '' }}
    {!! $attributes->merge(['class' => 'block w-full']) !!}
/>
