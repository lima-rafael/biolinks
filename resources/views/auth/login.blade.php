<div>
    {{ auth()->id() }}
    <h1>Login</h1>

    @if ($mensagem = session()->get('mensagem'))
        <span>{{$mensagem}}</span>        
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
            @error('email')
                <span>{{$message}}</span>
            @enderror
        </div>
        <br>
        <div>            
            <input type="password" name="password" placeholder="Senha">
            @error('password')
                <span>{{$message}}</span>
            @enderror
        </div>
        <br>
        <button type="submit">Login</button>
    </form>
</div>
