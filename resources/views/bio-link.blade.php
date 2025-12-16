<div>
    <h1>{{ $user->name }} - {{ $user->id }}</h1>
    <p>{{ $user->description }}</p>
    <img src="/storage/{{ $user->photo }}" alt="Profile Photo">
    <ul>
        @foreach ($user->links as $link)
            <li>
                <a href="{{ $link->link }}" target="_blank">
                    {{ $link->id }} . {{ $link->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
