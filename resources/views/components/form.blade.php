@props(['route', 'post' => null, 'put' => null])

@php
    $methods = $post || $put ? 'post' : 'get';
@endphp

<form {{ $attributes->class(['flex flex-col gap-4']) }} action="{{ $route }}" method="{{ $methods }}" >
    @csrf
    @if ($put)
        @method('put')
    @endif
    {{ $slot }}
</form>