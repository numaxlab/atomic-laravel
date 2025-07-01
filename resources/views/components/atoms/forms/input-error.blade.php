@props(['messages'])

@if ($messages)
    <div class="at-small text-danger">
        <ul>
            @foreach ((array) $messages as $message)
                @if (is_array($message))
                    @foreach ($message as $subMessage)
                        <li>{{ $subMessage }}</li>
                    @endforeach
                @else
                    <li>{{ $message }}</li>
                @endif
            @endforeach
        </ul>
    </div>
@endif
