@extends('dashboard.master')

@section('content')
        <form action="{{ route('category.store') }}" method="post">

        @include('dashboard.categories._form')
            
        </form>

@endsection

