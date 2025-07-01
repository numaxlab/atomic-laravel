<input type="radio" {!! $attributes->merge(['class' => 'mr-2']) !!} />
<label for="{{ $attributes->get('id') }}" class="at-small">{{ $slot }}</label>
