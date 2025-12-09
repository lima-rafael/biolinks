<div>
    <h1>Criar um link</h1>

    @if ($mensagem = session()->get('mensagem'))
        <span>{{$mensagem}}</span>        
    @endif

    <form action="{{ route('links.create') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="link" placeholder="Link" value="{{ old('link') }}">
            @error('link')
                <span>{{$message}}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
            @error('name')
                <span>{{$message}}</span>
            @enderror
        </div>
        <br>
        <button type="submit">Salvar</button>
    </form>
</div>
