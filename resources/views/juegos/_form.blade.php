	@csrf

    <div class="form-group">
	    <label for="url">Nombre del juego</label>
	    <input class="form-control border-0 bg-light shadow-sm"
	        id="nombre"
	        type="text"
	        name="nombre"
	        required
	        value="{{ old('nombre', $juego->nombre) }}"
	    >
	</div>

	<div class="form-group">
	    <label for="url">URL del juego</label>
	    <input class="form-control border-0 bg-light shadow-sm"
	        id="url_juego"
	        type="url"
	        name="url_juego"
	        required
	        value="{{ old('url_juego', $juego->url_juego) }}"
	    >
	</div>

	<div class="form-group">
	    <label for="url">Descripcion del juego</label>
	    <input class="form-control border-0 bg-light shadow-sm"
	        id="descripcion"
	        type="text"
	        name="descripcion"
	        required
	        value="{{ old('descripcion', $juego->descripcion) }}"
	    >
	</div>

	<div class="form-group">
	    <label for="url">URL de la imagen</label>
	    <input class="form-control border-0 bg-light shadow-sm"
	        id="url_imagen"
	        type="url"
	        name="url_imagen"
	        required
	        value="{{ old('url_imagen', $juego->url_imagen) }}"
	    >
	</div>

	<div class="form-group">
	    <label for="url">Estatus del juego</label>
	    <select name='estatus' class="form-control border-0 bg-light shadow-sm">
	    	<option value="Activo"   @if(old('estatus', $juego->estatus)== 'Activo') selected @endif>Activo</option>
	    	<option value="Desactivo" @if(old('estatus', $juego->estatus)== 'Desactivo') selected @endif>Desactivo</option>
	    </select>
	</div>

	 