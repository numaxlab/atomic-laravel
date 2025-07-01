<section class="org-tier">
    @if (!empty($header))
        {{ $header }}
    @endif
    <div class="tier-content">
        {{ $slot }}
    </div>
</section>
