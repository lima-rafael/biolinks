<div>
    <h1>Registar</h1>

    @if ($mensagem = session()->get('mensagem'))
        <span>{{$mensagem}}</span>        
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
            @error('name')
                <span>{{$message}}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
            @error('email')
                <span>{{$message}}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="email" name="email_confirmation" placeholder="E-mail Confimerd" value="">
        </div>
        <br>
        <div>            
            <input type="password" name="password" placeholder="Senha">
            @error('password')
                <span>{{$message}}</span>
            @enderror
        </div>
        <br>
        <button type="submit">Registar</button>
    </form>
</div>
