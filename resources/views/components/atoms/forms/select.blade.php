@props(['disabled' => false, 'readonly' => false])

<select
    {{ $disabled ? 'disabled' : '' }}
    {{ $readonly ? 'readonly' : '' }}
    {!! $attributes->merge(['class' => 'block w-full']) !!}
>
    {{ $slot }}
</select>
