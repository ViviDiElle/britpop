<form action="{{ route('albums.store') }}" method="POST" class="p-5">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label text-primary">Titolo:</label>
        <input type="text" id="title" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="artist_id" class="form-label text-primary">Artista:</label>
        <select id="artist_id" name="artist_id" class="form-control" required>
            @foreach ($artists as $artist)
                <option value="{{ $artist->id }}">{{ $artist->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="year" class="form-label text-primary">Anno:</label>
        <input type="number" id="year" name="year" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Crea</button>
</form>
