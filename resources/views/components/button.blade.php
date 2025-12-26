@props([
    'href' => null,
    'block' => null,
    'outline' => null,
    'info' => null,
    'ghost' => null,
    'wide' => null,
])

@php
    $tag = $href ? 'a' : 'button';
@endphp

<{{ $tag }} {{ $href ? "href=$href" : '' }} 
{{ $attributes->class([
    'btn btn-primary',
    'btn-block' => $block,
    'btn-outline' => $outline,
    'btn-info' => $info,
    'btn-ghost' => $ghost,
    'btn-wide' => $wide,
]) }}
>{{ $slot }}</{{ $tag }}>