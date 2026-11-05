@extends('dashboard.master')

@section('content')
        <form action="{{ route('category.update', $category->id) }}" method="post">
            
            @method('PATCH')
            @include('dashboard.categories._form', ['task' => 'edit'])

        </form>

@endsection

