<div>
    <h1>Edite um link: {{ $link->id }}</h1>

    @if ($mensagem = session()->get('mensagem'))
        <span>{{$mensagem}}</span>        
    @endif

    <form action="{{ route('links.edit', $link) }}" method="POST">
        @csrf
        @method('put')
        <div>
            <input type="text" name="link" placeholder="Link" value="{{ old('link', $link->link) }}">
            @error('link')
                <span>{{$message}}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="text" name="name" placeholder="Name" value="{{ old('name', $link->name) }}">
            @error('name')
                <span>{{$message}}</span>
            @enderror
        </div>
        <br>
        <button type="submit">Salvar</button>
    </form>
</div>
