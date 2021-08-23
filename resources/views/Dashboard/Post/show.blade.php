@extends('dashboard.master')



@section('content')



    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titulo</label>
        <input readonly class="form-control" type="text" name="title" id="title" value="{{ $post->title }}">

        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror

    </div>
    <div class="mb-3">
        <label for="url_clean" class="form-label">Url limpia</label>
        <input readonly class="form-control" type="text" id="url_clean" value="{{ $post->url_clean }}">
    </div>
    <div class="mb-3">
        <label for="content">Contenido</label>
        <textarea readonly class="form-control" id="content" rows="3">{{ $post->content }}</textarea>
    </div>

@endsection
