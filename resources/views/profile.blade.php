<div>
    <h1>Profile</h1>

    @if ($message = session('message'))
        <div>{{ $message }}</div>
    @endif

    <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <img src="/storage/{{ $user->photo }}" alt="Profile Pictire">
            <input type="file" name="photo">
            @error('photo')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <input type="text" name="name" placeholder="Nome" value="{{ old('name', $user->name) }}">
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <textarea name="description" id="description" placeholder="Um breve resumo" cols="30" rows="10">{{ old('description', $user->description) }}</textarea>
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="text" name="handler" placeholder="@seuLink" value="{{ old('handler', $user->handler) }}">
            @error('handler')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button type="submit">Salvar</button>
    </form>
</div>
