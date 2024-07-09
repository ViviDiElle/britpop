<form action="{{ route('albums.update', $album) }}" method="POST" class="p-5">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label text-primary">Titolo:</label>
        <input type="text" id="title" name="title" value="{{ $album->title }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="artist" class="form-label text-primary">Artista:</label>
        <input type="text" id="artist" name="artist" value="{{ $album->artist }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="year" class="form-label text-primary">Anno:</label>
        <input type="number" id="year" name="year" value="{{ $album->year }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Aggiorna</button>
</form>
