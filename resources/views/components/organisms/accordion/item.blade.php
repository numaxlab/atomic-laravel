<h3 class="accordion-header">
    <button
        type="button"
        id="accordionHeader0"
        aria-expanded="false"
        class="accordion-control"
        aria-controls="accordionPanel0"
        @click="toggle"
    >
        {{ $slot }}

        @if (!empty($icon))
            {{ $icon }}
        @else
            <i
                class="accordion-icon fa-solid fa-caret-down"
                data-alt="fa-solid fa-caret-up"
                aria-hidden="true"
            ></i>
        @endif
    </button>
</h3>
<div
    class="accordion-panel"
    id="accordionPanel0"
    role="region"
    aria-labelledby="accordionHeader0"
    hidden=""
>
    @if (!empty($content))
        {{ $content }}
    @endif
</div>
