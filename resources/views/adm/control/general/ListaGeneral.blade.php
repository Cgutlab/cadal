@extends('adm.cuerpo')

@section('titulo', 'Lista Producto')

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
						<td>Familia</td>
						<td>Titulo</td>
						<td>Contenido</td>
						<td>Imagen</td>
						<td>Orden</td>
						<td class="text-right">Acciones</td>
					</thead>
					<tbody>
					@foreach($subfamilias as $subfamilia)
						@foreach($generales as $general)
							@if($general->id_subfamilia == $subfamilia->id)
								<tr>
									<td>{!!$subfamilia->titulo!!}</td>
									<td>{!!$general->titulo!!}</td>
									<td>{!!$general->contenido!!}</td>
									<td><img src="{{asset($general->imagen_destacada)}}" class="responsive-img" alt=""></td>
									<td>{!!$general->orden!!}</td>
									<td class="text-right">
										<a href="{{ route('productos.edit',$general->id)}}"><i class="material-icons">create</i></a>
										{!!Form::open(['class'=>'en-linea', 'route'=>['productos.destroy', $general->id], 'method' => 'DELETE'])!!}
											<button onclick='return confirm_delete(this);' type="submit" class="submit-button">
												<i class="material-icons red-text">cancel</i>
											</button>
										{!!Form::close()!!}
										<a class="btn waves-effect " style="background-color: #37C54B; font-size: 15px; font-size: 10px; width: 150px;" href="{{ route('galeria.create_galeria',$general->id)}}">Crear Galeria</a>
										<a class="btn waves-effect " style="background-color: #FFDF30; font-size: 15px; font-size: 10px; width: 150px;" href="{{ route('galeria.index_galeria',$general->id)}}">Galeria</a>
									</td>
								</tr>
							@endif
						@endforeach
					@endforeach
					</tbody>
				</table>			
			</div>
		</div>
    </div>
</main>
<script type="text/javascript" src="{{ asset('js/eliminar.js') }}"></script>

@endsection