

    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titulo</label>
        <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">

        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror

    </div>
    <div class="mb-3">
        <label for="url_clean" class="form-label">Url limpia</label>
        <input class="form-control" type="text" id="url_clean" value="{{ old('url_clean') }}">
    </div>
    <div class="mb-3">
        <label for="content">Contenido</label>
        <textarea class="form-control" id="content" rows="3">{{ old('content') }}</textarea>
    </div>

    <input type="submit" value="Enviar" class="btn btn-primary">

