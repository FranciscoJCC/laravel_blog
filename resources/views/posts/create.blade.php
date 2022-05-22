@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Articulo</div>

                <div class="card-body">
                    <form 
                        action="{{ route('posts.store') }}" 
                        method="POST"
                        enctype="multipart/form-data"
                    >

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status')}}
                            </div>
                        @endif

                        <div class="form-group mb-4">
                            <label for="" >Título *</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="file">Imágen</label>
                            <input type="file" name="file" class="form-control-file" id="file">
                        </div>
                        <div class="form-group mb-4">
                            <label for="" >Contenido *</label>
                            <textarea name="body" rows="6" class="form-control" required></textarea>
                        </div>
                        <div class="form-group mb-4">
                            <label for="" >Contenido embebido</label>
                            <textarea name="iframe" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-4">
                            @csrf
                            <input type="submit" value="Guardar" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
