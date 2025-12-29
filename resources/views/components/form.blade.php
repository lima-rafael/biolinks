@props(['route', 'post' => null, 'put' => null, 'patch' => null, 'delete' => null])

@php
    $methods = $post || $put || $patch || $delete ? 'POST' : 'GET';
@endphp

<form {{ $attributes->class(['flex flex-col gap-4']) }} action="{{ $route }}" method="{{ $methods }}" >
    @csrf
    @if ($put)
        @method('PUT')
    @endif
    @if ($patch)
        @method('PATCH')
    @endif
    @if ($delete)
        @method('DELETE')
    @endif
    {{ $slot }}
</form>