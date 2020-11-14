@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                	<strong>Mostrando registro</strong> 
		            <a  href="{{ route('juego.index') }}" class="btn btn-primary btn-sm float-right">
		                Regresar
		            </a>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <p><strong>Id:</strong></strong></p>
                            <p><strong>Nombre:</strong></p>
                            <p><strong>Url del juego:</strong></p>
                            <p><strong>descripción:</strong></p>
                            <p><strong>Url de la imagen:</strong></p>
                        </div>
                        <div class="col-md-10">
                            <p>{{ $juego->id }}</p>
                            <p>{{ $juego->nombre }}</p>
                            <p><a href="{{ $juego->url_juego }}">{{ $juego->url_juego }}</a></p>
                            <p>{{ $juego->descripcion }}</p>
                            <p><img src="{{ $juego->url_imagen }}"></p>
                            <p>{{ $juego->url_imagen }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                           
                            <p><strong>Estatus:</strong></p>
                        </div>
                        <div class="col-md-10">
                           
                            <p>{{ $juego->estatus }}</p>
                        </div>
                    </div>
                </div>
                <a class="btn btn-danger" 
                    href="#"
                    onclick="document.getElementById('delete-project').submit()"
                    >Eliminar
                </a>
                <form id="delete-project"
                    class="d-none"
                    method="POST" action="{{ route('juego.destroy', $juego) }}">
                    @csrf 
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
