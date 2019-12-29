@extends('pages.templates.cuerpo')

@section('titulo', 'Cadal')

@section('estilo')

	<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">

	<link rel="stylesheet" href="{{ asset('css/page/home.css') }}">

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

		<div class="continaer-fluid" style="margin: 0px 7%;">

			<h1 class="titulo-soplado">PRODUCTOS</h1>

			<div style="display:flex; justify-content: center; align-items: center;"><div class="raya-soplado"></div></div>

			<div class="row" style="margin: 4% 0px;">

				@foreach($productos as $producto)

					<div class="col s12 m4">

						<a href="{{$producto->link}}">

							<div class="cont-pro" style"    position: unset;">

								<div class="div-product" style="border: unset;">

									<img class="responsive-img" style="border-radius: 10px;border: 1px solid darkgrey; width: 360px; height: 290px " src="{{asset($producto->imagen)}}" alt="">

									

								</div>

							

							</div>

						</a>

						

						
	<div class="div-nombre" style="margin-top: -20px; position:unset;">{!!$producto->nombre !!}</div>
					</div>

				@endforeach

			</div>

		</div>

		<div class="row contenido">

			<div class="titulo-contenido">

				{!!$home->titulo !!}

			</div>

			<div class="contenido-contenido">

				{!!$home->contenido !!}

			</div>

			<div>

				<center><a href="{{ url('/empresa') }}" class="boton">

					<p>Más de nuestra empresa</p>

				</a></center>

			</div>

		</div>

	</div>

@endsection