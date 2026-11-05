@extends('dashboard.master')

@section('content')
   
    <a href="{{ route('post.create') }}">create</a>
    
    <table>
        <thead>
             <td>
                Id
            </td>
            <td>
                Title
            </td>
            <td>
                Posted
            </td>
            <td>
                Category
            </td>
            <td>
                options
            </td>
        </thead>
        <tbody>
            @foreach ($posts as $p )
            <tr>
                <td>
                    {{ $p->id }}
                </td>
                <td>
                    {{ $p->title }}
                </td>
                <td>
                    {{ $p->posted }}
                </td>
                <td>
                    {{ $p->category->title }}
                </td>
                
                <td>
                    <a href="{{ route('post.edit', $p->id) }}">editar</a>
                    <a href="{{ route('post.show', $p->id) }}">ver</a>
                    <form action="{{ route('post.destroy', $p->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">eliminar</button>
                    </form>
                </td>
            </tr> 
            @endforeach
        </tbody>
            
    </table>
   
    {{ $posts->links() }}
@endsection