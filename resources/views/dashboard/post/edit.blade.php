@extends('dashboard.master')

@section('content')
        <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
            
            @method('PATCH')
            @include('dashboard.post._form', ['task' => 'edit'])

        </form>

@endsection

