@extends('pages.templates.cuerpo')

@section('titulo', 'Empresa')

@section('estilo')

	<link rel="stylesheet" href="{{ asset('css/page/empresa.css') }}">

	<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">

@endsection



@section('paginas')

	<div class="container-fluid">

		<div id="carousel" class="carousel carousel-slider center" data-indicators="true">

		    @foreach($sliders as $slider)

			    <div class="carousel-item white-text" href="">

			      <img src="{{asset($slider->imagen)}}" alt="">

			    </div>

			    <div style="display:  flex; justify-content:  center; align-items:  center; height: 100%;">
			    	@if($slider->titulo)
			    	<div class="cont-titulos" >

				    	<div>

				    		<div class="titulo-slider ">{!!$slider->titulo !!}</div>

				    		<div class="subtitulo-slider ">{!!$slider->subtitulo !!}</div>

				    	</div>

				    </div>
				    @endif
			    </div>

			    

			    

		    @endforeach

		</div>

		

	</div>

	<div class="container-fluid" style="margin: 5% 7%; ">

		<section class="row" style="margin-bottom: 4%; ">

			<p class="somos">INDUSTRIA PLÁSTICA</p>

			<div style="display:flex; justify-content: center; align-items: center;"><div class="raya-soplado"></div></div>

		</section>

		<section class="row">

			<div class="col s12 m6">

				<article class="titulo">

					{!! $nuestra->titulo !!}

				</article>

				<article class="contenido">

					{!! $nuestra->contenido !!}

				</article>

			</div>

			<div class="col s12 m6">

				<img class="responsive-img" src="{{asset($nuestra->imagen)}}" width="100%;" alt="">

			</div>

		</section>

	</div>

@endsection