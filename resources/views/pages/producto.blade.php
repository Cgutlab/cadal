@extends('pages.templates.cuerpo')

@section('titulo', 'Soplado')

@section('estilo')

	<link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">

	<link rel="stylesheet" href="{{ asset('css/page/home.css') }}">
	<link rel="stylesheet" href="{{ asset('css/page/subproducto.css') }}">
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

			<h1 class="titulo-soplado">SOPLADO</h1>

			<div style="display:flex; justify-content: center; align-items: center;"><div class="raya-soplado"></div></div>

			<div class="row" style="margin: 4% 0px; display:flex; justify-content: center;">

				<?php $hijos=false; ?>

				@foreach($familias as $familia)

					@foreach($productos as $producto)

						@if($familia->id_familia == $producto->id)

							<?php $hijos=true; ?>

						@endif

					@endforeach

				@endforeach

				@foreach($productos as $producto)

					<div class="col s12 m4  " style="    margin-left: 0px">

						@if($hijos == true)
							<a href="{{route("subproducto",$producto->id)}}" class="div-sub" style="height: 260px; border: unset">
							<div >
								<img class="responsive-img" src="{{asset($producto->imagen)}}" alt="" style="max-height:  260px; border: 1px solid darkgre; border-radius: 10px">
							</div>
				                
				                <div class="producto-hover"></div>
				            </a>
			              	<div class="barra-producto">
			                		<p class="producto2" style="margin-top: 5px;">{{$producto->titulo }}</p>
			              	</div>
						@else
							<a href="{{route("subproducto",$producto->id)}}" class="div-sub">
							<div >
								<img class="responsive-img" src="{{asset($producto->imagen)}}" alt="" style="max-height:  260px;border: 1px solid darkgre; border-radius: 10px">
							</div>
				                
				                <div class="producto-hover"></div>
				            </a>
				            <div class="barra-producto">
				                <p class="producto2" style="margin-top: 5px;">{{$producto->titulo }}</p>
				            </div>
						@endif

						

					</div>

				@endforeach

			</div>

		</div>

	</div>

@endsection