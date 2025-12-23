@props(['name', 'prefix' => null])

<label class="input input-bordered w-full ">
    @if ($prefix)
        <sapn>{{ $prefix }}</sapn>
    @endif
    <input class="grow" name="{{ $name }}" {{ $attributes }}>
    @error($name)
        <div class="text-sm text-error">{{ $message }}</div>
    @enderror
</label>
