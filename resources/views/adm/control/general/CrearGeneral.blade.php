@extends('adm.cuerpo')

@section('titulo', 'Crear Producto')

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
			{!!Form::open(['route'=>'productos.store', 'method'=>'POST', 'files' => true])!!}
				
				<div class="row">
					<div class="input-field col s6">
						{!!Form::label('id:')!!}
						{!!Form::text('id_subfamilia', $subfamilia->id , ['class'=>'validate', 'required', 'onfocus="this.blur()"'])!!}
					</div>
					<div class="row">
						<div class="file-field input-field col s12">
							<div class="btn">
							    <span>Imagen</span>
							    {!! Form::file('imagen_destacada') !!}
							</div>
							<div class="file-path-wrapper">
							    {!! Form::text('imagen_destacada',null, ['class'=>'file-path validate']) !!}
							</div>
						</div>
					</div>
					<div class="input-field col s6">
						{!!Form::label('Titulo:')!!}
						{!!Form::text('titulo', null , ['class'=>'validate', 'required'])!!}
					</div>
					
					<div class="input-field col s6">
						{!!Form::label('Orden:')!!}
						{!!Form::text('orden', null , ['class'=>'validate', 'required'])!!}
					</div>
					
				</div>
				<div class="row">
					<label class="col s12" for="contenido">Contenido</label>
			      	<div class="input-field col s12">
						{!!Form::textarea('contenido', null, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
				</div>
				<div class="row">
					<label class="col s12" for="tabla">Tabla</label>
			      	<div class="input-field col s12">
						{!!Form::textarea('tabla', null, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
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
	CKEDITOR.replace('contenido');
	CKEDITOR.replace('tabla');
	CKEDITOR.config.height = '200px';
	CKEDITOR.config.width = '100%';
</script>
@endsection
