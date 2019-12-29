@extends('adm.cuerpo')



@section('titulo', 'Lista de Categoria')



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

					<td>Nombre</td>

					<td>Orden</td>
					<td>Padre</td>

					<td class="text-right">Acciones</td>

				</thead>

				<tbody>

				@foreach($subfamilias as $subfamilia)

						<tr>

							<td>{!!$subfamilia->titulo!!}</td>

							<td>{!!$subfamilia->orden!!}</td>
							<td>
								@foreach($subfamilias2 as $subfamilia2)
									@if($subfamilia2->id == $subfamilia->id_familia)
										{!! $subfamilia2->titulo !!}
									@endif
								@endforeach
							</td>

							<td class="text-right">

								<a href="{{ route('subproductos.edit',$subfamilia->id)}}"><i class="material-icons">create</i></a>

								<a class="btn waves-effect " style="background-color: #37C54B; font-size: 15px; font-size: 8px; width: 150px;" href="{{ route('productos.create_general',$subfamilia->id)}}">Crear Producto</a>
								<a class="btn waves-effect " style="background-color: #FFDF30; font-size: 15px; font-size: 8px; width: 150px;" href="{{ route('productos.index_general',$subfamilia->id)}}">Lista de Productos</a>
								{!!Form::open(['class'=>'en-linea', 'route'=>['subproductos.destroy', $subfamilia->id], 'method' => 'DELETE'])!!}

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