@extends('dashboard.master')

@section('content')
    
    <a href="{{ route('category.create') }}">create</a>
    
    <table>
        <thead>
             <td>
                Id
            </td>
            <td>
                Title
            </td>
            <td>
                options
            </td>
        </thead>
        
        <tbody>
            @foreach ($categories as $c )
            <tr>
                <td>
                    {{ $c->id }}
                </td>
                <td>
                    {{ $c->title }}
                </td>
                <td>
                    <a href="{{ route('category.edit', $c->id) }}">editar</a>
                    <a href="{{ route('category.show', $c->id) }}">ver</a>
                    <form action="{{ route('category.destroy', $c->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">eliminar</button>
                    </form>
                </td>
            </tr> 
            @endforeach
        </tbody>
            
    </table>
    
    {{ $categories->links() }}
@endsection