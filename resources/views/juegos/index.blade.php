@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                	<strong>Listado de Juegos</strong> 
		            <a  href="{{ route('juego.create')}}" class="btn btn-primary btn-sm float-right">
		                <i class="fa fa-plus"></i> Crear juego
		            </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">Url</th>
					      <th scope="col">Nombre</th>
					      <th scope="col">Imagen</th>
					      <th width="140px">Accion</th>
					    </tr>
					  </thead>
					  <tbody class=''>
						  @foreach($juegos as $juego)
						    <tr>
						      <td><a href="{{ $juego->url_juego }}"  target="_blank">{{ $juego->url_juego }}</a> </td>
						      <td>{{ $juego->nombre }}</td>
						      <td>
						      	<img src="{{ $juego->url_imagen }}">
						      </td>
						      <td class="text-center">
						      	<a  href="{{ route('juego.show', $juego) }}" class="btn btn-primary btn-sm" title="Mostrar">
		                			<i class="fa fa-eye"></i>
		            			</a>
		            			<a  href="{{ route('juego.edit', $juego) }}" class="btn btn-warning btn-sm" title='Editar'>
		                			<i class="fa fa-pencil"></i>
		            			</a>
  						      </td>
						    </tr>
						  @endforeach
						  <tr>
						  	<td colspan='4'>
						  		{{ $juegos->links() }}
						  	</td>
						  </tr>
					  </tbody>
					</table>
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
