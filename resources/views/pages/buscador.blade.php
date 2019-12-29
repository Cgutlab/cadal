@extends('pages.templates.cuerpo')

@section('titulo','Cadal | Buscador')

@section('estilo')

	<link rel="stylesheet" href="{{ asset('css/page/subproducto.css') }}">

@endsection

@section('paginas')

<div class="container-fluid" style="margin: 5% 7%;">

	<div class="row">

		

		@if($productos!=null)

			@foreach($productos as $familia)

				<div class="col s12 m4">

		        
					<a href="{{route("subproducto",$familia->id)}}" class="div-sub">
		                <img class="responsive-img" src="{{asset($familia->imagen)}}" alt="" style="max-height: 100%;">
		                <div class="producto-hover"></div>
		            </a>
		            <div class="barra-producto">
		                <p class="producto2" style="margin-top: 5px;">{{$familia->titulo }}</p>
		            </div>
		      	</div>

	        @endforeach

	    @endif

		

	</div>

</div>

{{-- 

<div class="container">

	<div class="col s12">	

		@if($productos!=null)

		<div class="container-pad">

			@foreach($productos as $producto)

			    <div class="col-xs-12 col-sm-4 col-md-4 cont-img">

					<a href="{{route('subproducto',$producto->id)}}">

						<div class="img-dest">

							<img class="img-responsive img-responsive-alto" src="{{ asset($producto->imagen_destacada) }}">

							<div class="img-hover">

								<img class="add" src="{{asset('img/add.png')}}" alt="">

							</div>

						</div>

						<div class="nombre-dest">

							<p>{{$producto->{"nombre_".$idioma} }}</p>

						</div>

						

					</a>

			    </div>



			@endforeach

		</div>

			

		@endif

	</div>

	

</div> --}}

@endsection

