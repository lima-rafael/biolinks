<x-layout.app>
    <x-container>
        <x-card title="Registar">
            <x-form :route="route('register')" post id="register-form">
                <x-input name="name" placeholder="Name" value="{{ old('name') }}" />
                <x-input type="email" name="email" placeholder="email" value="{{ old('email') }}" />
                <x-input type="email" name="email_confirmation" placeholder="E-mail Confimerd" value="" />
                <x-input type="password" name="password" placeholder="Senha" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('login')">Aready have an account!</x-a>
                <x-button type="submit" form="register-form">Register</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
