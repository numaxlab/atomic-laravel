@props(['value', 'disabled' => false])

<button {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'at-button']) !!}>
    {{ $value ?? $slot }}
</button>
