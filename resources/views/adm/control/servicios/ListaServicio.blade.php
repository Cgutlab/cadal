@extends('adm.cuerpo')

@section('titulo', 'Editar Servicio')

@section('contenido')
<main>
	<div class="container">
	    @if(count($errors) > 0)
		<div class="col s12 card-panel red lighten-4 red-text text-darken-4">
	  		<ul>
	  			@foreach($errors->all() as $error)
	  				<li>{!!$error!!}</li>
	  			@endforeach
	  		</ul>
	  	</div>
		@endif
		@if(session('success'))
		<div class="col s12 card-panel green lighten-4 green-text text-darken-4">
			{{ session('success') }}
		</div>
		@endif

		<div class="row">
			<div class="col s12">
				<table class="highlight bordered">
				<thead>
					<td>Sección</td>
					<td>Imagen</td>
					<td>Titulo</td>
					<td>Subtitulo</td>
					<td>Contenido</td>
					<td>Orden</td>
					<td class="text-right">Acciones</td>
				</thead>
				<tbody>
				@foreach($servicios as $servicio)
					<tr>
						<td>{!!$servicio->seccion!!}</td>
						<td><img class="slider-foto" src="{{ asset($servicio->imagen) }}"></td>
						<td>{!!$servicio->titulo!!}</td>
						<td>{!!$servicio->subtitulo!!}</td>
						<td>{!!$servicio->contenido!!}</td>
						<td>{!!$servicio->orden!!}</td>
						<td class="text-right">
							<a href="{{ route('servicios.edit',$servicio->id)}}"><i class="material-icons">create</i></a>
							{!!Form::open(['class'=>'en-linea', 'route'=>['servicios.destroy', $servicio->id], 'method' => 'DELETE'])!!}
								<button onclick='return confirm_delete(this);' type="submit" class="submit-button">
									<i class="material-icons red-text">cancel</i>
								</button>
							{!!Form::close()!!}
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>			
			</div>
		</div>
    </div>
</main>
<script type="text/javascript" src="{{ asset('js/eliminar.js') }}"></script>

@endsection