<x-layout.app>
    <x-container>
        <div class="flex flex-col absolute top-10 left-10 align-center gap-1">
            <x-button href="{{ route('profile') }}" ghost>Update Profile</x-button>
            <x-button href="{{ route('links.create') }}" ghost>Create a new link</x-button>
            <x-button href="{{ route('logout') }}" ghost>Logout</x-button>
        </div>
        <div class="text-center space-y-2">
            <x-img src="/storage/{{ $user->photo }}" alt="Profile Pictire" />
            <div class="font-bold text-2xl tracking-wider">
                {{ $user->name }}
            </div>
            <div class="text-sm opacity-80">
                {{ $user->description }}
            </div>
            <ul class="space-y-2">
                @foreach ($links as $link)
                    <li class="flex justify-center items-center">
                        @unless ($loop->last)
                            <x-form :route="route('links.down', $link)" patch>
                                <x-button ghost>
                                    <x-icons.down class="w-6 h-6" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button disabled ghost>
                                <x-icons.down class="w-6 h-6" />
                            </x-button>
                        @endunless
                        @unless ($loop->first)
                            <x-form :route="route('links.up', $link)" patch>
                                <x-button ghost>
                                    <x-icons.up class="w-6 h-6" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button disabled ghost>
                                <x-icons.up class="w-6 h-6" />
                            </x-button>
                        @endunless
                        <x-button href="{{ route('links.edit', $link) }}" wide outline info>
                            {{ $link->name }}
                        </x-button>
                        <x-form :route="route('links.destroy', $link)" delete onsubmit="return confirm('Tem certeza?')">
                            <x-button ghost>
                                <x-icons.trash class="w-6 h-6" />
                            </x-button>
                        </x-form>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>
