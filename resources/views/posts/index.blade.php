@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Articulos
                    <a 
                        href="{{ route('posts.create') }}"
                        class="btn btn-sm btn-primary float-end"
                    >
                        Crear
                    </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Titulo</td>
                                <td colspan="2">&nbsp;</td>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-primary">
                                            Editar
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input 
                                                type="submit" 
                                                value="Eliminar" 
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('??Deseas eliminar el post?')"
                                            >
                                        </form>
                                    </td>
                                </tr>                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
