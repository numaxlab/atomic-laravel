<div>
    <input type="checkbox" {!! $attributes->merge(['class' => 'mr-2']) !!} />
    <label for="{{ $attributes->get('id') }}" class="at-small">{{ $slot }}</label>
</div>
