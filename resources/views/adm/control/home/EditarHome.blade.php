@extends('adm.cuerpo')

@section('titulo', 'Editar lineas de Home')

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
			{!!Form::model($home, ['route'=>['home.update',$home->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					<div class="input-field col s12 m6">
						{!!Form::label('Link :')!!}
						{!!Form::text('link',$home->link,['class'=>'validate'])!!}
					</div>
					<label class="col s12" for="parrafo">Titulo </label>
			      	<div class="input-field col s12">
						{!!Form::textarea('titulo', $home->nombre, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5','required'])!!}
				    </div>
				    <label class="col s12" for="parrafo">Contenido</label>
			      	<div class="input-field col s12">
						{!!Form::textarea('contenido', $home->contenido, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5', 'required'])!!}
				    </div>
				    
				</div>
				<div class="col s12 no-padding">
					{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
			{!!Form::close()!!} 
			</div>
			</div>
		</div>
	</main>
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('titulo');
	CKEDITOR.replace('contenido');
	CKEDITOR.config.height = '100px';
	CKEDITOR.config.width = '100%';
</script>
@endsection