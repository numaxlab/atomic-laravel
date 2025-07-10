@props(['disabled' => false, 'readonly' => false])

@php
    $defaultClass = 'block w-full';

    if (count($errors->get($attributes->get('name')))>0) {
        $defaultClass .= ' border-danger';
    }
@endphp

<input
    {{ $disabled ? 'disabled' : '' }}
    {{ $readonly ? 'readonly' : '' }}
    {!! $attributes->merge(['class' => $defaultClass]) !!}
/>
