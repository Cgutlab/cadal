@extends('adm.cuerpo')



@section('titulo', 'Crear Servicio')



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

			{!!Form::open(['route'=>'servicios.store', 'method'=>'POST', 'files' => true])!!}

				<div class="row">

					<div class="input-field col s6">

						<select id="seccion" name="seccion">

							<option value="inyeccion">Inyección</option>

							<option value="impresion">Impresión</option>

							<option value="matricerio">Matricero</option>

						</select>

						<label>Donde debe aparecer el slider?</label>

					</div>

				</div>

				<div class="row">

					<div class="file-field input-field col s6">

						<div class="btn">

						    <span>Imagen</span>

						    {!! Form::file('imagen') !!}

						</div>

						<div class="file-path-wrapper">

						    {!! Form::text('imagen',null, ['class'=>'file-path validate']) !!}

						</div>

					</div>


					<div class="file-field input-field col s6">

						<div class="btn">

						    <span>Imagen</span>

						    {!! Form::file('imagen2') !!}

						</div>

						<div class="file-path-wrapper">

						    {!! Form::text('imagen2',null, ['class'=>'file-path validate']) !!}

						</div>

					</div>

				</div>

				<div class="row">

					<div class="file-field input-field col s6">

						<div class="btn">

						    <span>Imagen</span>

						    {!! Form::file('imagen3') !!}

						</div>

						<div class="file-path-wrapper">

						    {!! Form::text('imagen3',null, ['class'=>'file-path validate']) !!}

						</div>

					</div>

					<div class="file-field input-field col s6">

						<div class="btn">

						    <span>Imagen</span>

						    {!! Form::file('imagen4') !!}

						</div>

						<div class="file-path-wrapper">

						    {!! Form::text('imagen4',null, ['class'=>'file-path validate']) !!}

						</div>

					</div>

				</div>

				<div class="row">

					<div class="file-field input-field col s6">

						<div class="btn">

						    <span>Imagen</span>

						    {!! Form::file('imagen5') !!}

						</div>

						<div class="file-path-wrapper">

						    {!! Form::text('imagen5',null, ['class'=>'file-path validate']) !!}

						</div>

					</div>

				</div>

				</div>

				<div class="row">

					<label class="col s12" for="parrafo">Titulo</label>

			      	<div class="input-field col s12">

						{!!Form::textarea('titulo', null, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}

				    </div>

				</div>

				<div class="row">

					<label class="col s12" for="parrafo">Subtitulo</label>

			      	<div class="input-field col s12">

						{!!Form::textarea('subtitulo', null, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}

				    </div>

				</div>

				<div class="row">

					<label class="col s12" for="contenido">Contenido</label>

			      	<div class="input-field col s12">

						{!!Form::textarea('contenido', null, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}

				    </div>

				</div>

				

			    <div class="row">

					<div class="input-field col s6">

						{!!Form::label('Orden:')!!}

						{!!Form::text('orden', null , ['class'=>'validate', 'required'])!!}

					</div>

				</div>

				<div class="col s12 no-padding">

					{!!Form::submit('Crear', ['class'=>'waves-effect waves-light btn right'])!!}

				</div>

			{!!Form::close()!!} 

		</div>

		</div>

	</div>

</main>

<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>

<script>

	CKEDITOR.replace('titulo');

	CKEDITOR.replace('subtitulo');

	CKEDITOR.replace('contenido');

	CKEDITOR.config.height = '200px';

	CKEDITOR.config.width = '100%';

</script>

@endsection

