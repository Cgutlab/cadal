@extends('pages.templates.cuerpo')

@section('titulo','Inyección')

@section('estilo')

	<link rel="stylesheet" href="{{ asset('css/page/servicio.css') }}">

	<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">

	

@endsection

@section('paginas')

<div class="container-fluid" style="margin: 5% 7%;">

	<div class="row" style="margin-bottom: 4%;">

		<h1 class="servicios">INYECCIÓN</h1>

		<div style="display: flex; justify-content: center; align-items: center;"><div class="raya"></div></div>

	</div>

	<?php

		$i=0;

	?>

	@foreach($servicios as $servicio)

	<div class="row" style="padding-top: 2%;">

		<?php 

		if($i==0){ ?>
			
			<div class="col s12 m6">
				<div >
					<div class="titulo">{!!$servicio->titulo!!}</div>
					<div class="subtitulo">{!!$servicio->subtitulo!!}</div>
					<div class="contenido">{!!$servicio->contenido!!}</div>
				</div>
			</div>
			<div class="col s12 m6">

			<div class="carousel carousel-slider inyección">
				@if($servicio->imagen)
    				<a class="carousel-item" href="#one!"><img class="responsive-img" src="{{ asset($servicio->imagen)}}"></a>
    			@endif
    			@if($servicio->imagen2)
				    <a class="carousel-item" href="#two!"><img class="responsive-img" src="{{ asset($servicio->imagen2)}}"></a>
				@endif
    			@if($servicio->imagen3)
				    <a class="carousel-item" href="#three!"><img class="responsive-img" src="{{ asset($servicio->imagen3)}}"></a>
				@endif
    			@if($servicio->imagen4)
				    <a class="carousel-item" href="#four!"><img class="responsive-img" src="{{ asset($servicio->imagen4)}}"></a>
				@endif
    			@if($servicio->imagen5)
				    <a class="carousel-item" href="#four!"><img class="responsive-img" src="{{ asset($servicio->imagen5)}}"></a>
				@endif
  				</div>

				{{-- <img class="responsive-img	" src="{{asset($servicio->imagen)}}" alt="{{$servicio->titulo}}"> --}}

			</div>

		<?php $i++;

		}else{ ?>

			<div class="col s12 m6">

				<div class="carousel carousel-slider inyección">
    				<a class="carousel-item" href="#one!"><img class="responsive-img" src="{{ asset($servicio->imagen)}}"></a>
				    <a class="carousel-item" href="#two!"><img class="responsive-img" src="{{ asset($servicio->imagen2)}}"></a>
				    <a class="carousel-item" href="#three!"><img class="responsive-img" src="{{ asset($servicio->imagen3)}}"></a>
				    <a class="carousel-item" href="#four!"><img class="responsive-img" src="{{ asset($servicio->imagen4)}}"></a>
				    <a class="carousel-item" href="#four!"><img class="responsive-img" src="{{ asset($servicio->imagen5)}}"></a>
  				</div>

				{{-- <img class="responsive-img	" src="{{asset($servicio->imagen)}}" alt="{{$servicio->titulo}}"> --}}

			</div>
			
			<div class="col s12 m6">
				<div>
					<div class="titulo">{!!$servicio->titulo!!}</div>
					<div class="subtitulo">{!!$servicio->subtitulo!!}</div>
					<div class="contenido">{!!$servicio->contenido!!}</div>
				</div>
			</div>

		<?php

			$i=0;

		} ?>



	</div>

	<div class="br"></div>

	@endforeach

@endsection