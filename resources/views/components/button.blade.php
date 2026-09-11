@props([
    'variant' => 'primary', // primary | secondary
    'href' => '#',
])

@php
    $classes = $variant === 'primary' ? 'btn-primary' : 'btn-secondary';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
