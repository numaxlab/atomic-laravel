<article {{ $attributes->merge(['class' => 'ml-summary'])->filter(fn ($value, $key) => ! in_array($key, ['href'])) }}>
    @if (!empty($thumbnail))
        <a class="summary-media-wrapper" href="{{ $attributes->get('href') }}">
            {{ $thumbnail }}
        </a>
    @endif
    <h2 class="at-heading">
        <a href="{{ $attributes->get('href') }}">
            {{ $slot }}
        </a>
    </h2>
    @if (!empty($content))
        <div class="summary-content">
            {{ $content }}
        </div>
    @endif
</article>
