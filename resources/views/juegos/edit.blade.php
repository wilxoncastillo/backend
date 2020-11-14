@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                	<strong>Editar juego id: {{ $juego->id }}</strong> 
		            <a  href="{{ route('juego.index') }}" class="btn btn-primary btn-sm float-right">
		                Regresar
		            </a>
                </div>

                <div class="card-body">
                    @include('partials.validation-errors')

                    <form class="bg-white py-3 px-4 shadow rounded"
		                method="POST"
		                enctype="multipart/form-data"
		                action="{{ route('juego.update', $juego) }}">
                        @method('PUT')

		                @include('juegos._form')
						
						<button class="btn btn-primary btn-lg btn-block">Actualizar</button>
		            </form>
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
