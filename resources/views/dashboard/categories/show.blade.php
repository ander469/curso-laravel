@extends('dashboard.master')

    @section('content')
    
        <h1>{{ $category->title }}</h1>
        <br>
        <a href="{{ route('category.index') }}">Volver al listado</a>
    @endsection