<form action="{{ route('albums.update', $album) }}" method="POST" class="p-5 bg-light rounded">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <label for="title" class="form-label">Titolo:</label>
        <input type="text" id="title" name="title" value="{{ $album->title }}" class="form-control" required>
    </div>
    <div class="form-group mb-3">
        <label for="artist" class="form-label">Artista:</label>
        <input type="text" id="artist" name="artist" value="{{ $album->artist }}" class="form-control" required>
    </div>
    <div class="form-group mb-3">
        <label for="year" class="form-label">Anno:</label>
        <input type="number" id="year" name="year" value="{{ $album->year }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Aggiorna</button>
</form>
