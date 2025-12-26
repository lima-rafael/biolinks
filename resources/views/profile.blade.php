<x-layout.app>
    <x-container>
        <x-card title="Profile">
            <x-form :route="route('profile')" put id="form">
                <div class="flex gap-2 items-center">
                    {{-- <x-img src="/storage/{{ $user->photo }}" alt="Profile Pictire"/> --}}
                    <x-file-input name="photo" />
                </div>
                <x-input name="name" placeholder="Name" value="{{ old('name', $user->name) }}" />
                <x-textarea name="description" cols="30" rows="10" placeholder="description" value="{{ old('description', $user->description) }}" />
                <x-input prefix='biolinks.com.br/' type="handler" name="Handler" placeholder="handler" value="{{ old('handler', $user->handler) }}" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-button type="submit" form="form">Save</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
