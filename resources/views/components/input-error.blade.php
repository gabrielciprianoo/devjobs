@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm pl-2 bg-red-100 text-red-600 space-y-1 p-1 border-l-4 border-red-600']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
