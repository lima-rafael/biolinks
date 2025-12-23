<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form :route="route('login')" post id="login-form">
                <x-input name="email" type="email" placeholder="Email" value="{{ old('email') }}" />
                <x-input name="password" type="password" placeholder="Senha" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('register')">I need to create a new account!</x-a>
                <x-button form="login-form">Login</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
    {{-- <div>
        <h1>Login</h1>

        @if ($mensagem = session()->get('mensagem'))
            <span>{{ $mensagem }}</span>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div>
                <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                <input type="password" name="password" placeholder="Senha">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <button type="submit">Login</button>
        </form>
    </div> --}}
</x-layout.app>
