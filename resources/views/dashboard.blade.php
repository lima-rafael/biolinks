<x-layout.app>
    <div>
    <h1>Dashboard</h1>
    <a href="{{ route('links.create') }}">Criar</a>
    <a href="{{ route('profile') }}">Profile</a>
    <ul>
        @foreach ($links as $link)
            <li style="display: flex; gap: 5px">
                @unless ($loop->last)
                    <form action="{{ route('links.down', $link) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <button>down</button>
                    </form>
                @endunless
                @unless ($loop->first)
                    <form action="{{ route('links.up', $link) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <button>up</button>
                    </form>
                @endunless
                <a href="{{ route('links.edit', $link) }}">
                    {{ $link->sort }}
                    {{ $link->id }}
                    {{ $link->name }}
                </a>
                <form action="{{ route('links.destroy', $link) }}" method="post"
                    onsubmit="return confirm('Tem certeza?')">
                    @csrf
                    @method('DELETE')
                    <button>Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
</x-layout.app>
