@extends('dashboard.master')

    @section('content')
    
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>

        <span><strong>Estado:</strong> {{ $post->posted }}</span>
        <span><strong>Categoría:</strong> {{ $post->category->title }}</span>

            <hr>

        <h3>Descripción</h3>
        <div>
            {{ $post->descripcion }}
        </div>

        <h3>Contenido</h3>
        <div>
            {{ $post->content }}
        </div>

        <h3>Imagen</h3>
        @if ($post->image)
            <img src="/uploads/posts/{{ $post->image }}" style="width:250px" alt="{{ $post->title }}">
        @endif

        <br>
        <a href="{{ route('post.index') }}">Volver al listado</a>

    @endsection