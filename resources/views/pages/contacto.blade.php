@extends('pages.templates.cuerpo')
@section('titulo','Contacto')
@section('estilo')
	<link rel="stylesheet" href="{{ asset('css/page/contacto.css') }}">
@endsection
@section('paginas')
	<div class="container-fluid">
		<section style="position: relative;">
			<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.4704365074354!2d-58.491056484768556!3d-34.6680745804429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc91580b16be5%3A0xcb72a73cd41781f5!2sCadal!5e0!3m2!1ses!2sar!4v1524596091842" width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>--->
			{{-- <div class="row datos hide-on-small-only">
				<section class="col m12">
					<h5 class="white-text titulo-datos">CONTACTO | BUENOS AIRES</h5>
					<div class="row" style="margin-bottom: 10px;">
		                @foreach($argentina as $argen)
		                  @if($argen->tipo == 'direccion')
		                    <div class="col m2">
		                      <img src="{{asset('img/generico/ubicacion.png')}}" alt="">
		                    </div>
		                    <div class="col m10">
		                      {{$argen->descripcion}}
		                    </div>
		                  @endif
		                @endforeach
		              </div>
		              <div class="row" style="margin-bottom: 10px;">
		                @foreach($argentina as $argen)
		                  @if($argen->tipo == 'telefono')
		                    <div class="col m2">
		                      <img src="{{asset('img/generico/telefono.png')}}" alt="">
		                    </div>
		                    <div class="col m10">
		                      {{$argen->descripcion}}
		                    </div>
		                  @endif
		                @endforeach
		              </div>
		              <div class="row" style="margin-bottom: 10px;">
		                @foreach($argentina as $argen)
		                  @if($argen->tipo== 'mail')
		                    <div class="col m2">
		                      <img src="{{asset('img/generico/correo.png')}}" alt="">
		                    </div>
		                    <div class="col m10">
		                      {{$argen->descripcion}}
		                    </div>
		                  @endif
		                @endforeach
		              </div>
				</section>
			</div> --}}
		</section>
		<section class="row" style="margin: 1% 7%;">
			<div class="contacto">{{ Lang::get('general.mensajito') }}</div>
		</section>
		<section style="margin: 5% 7%;">
			<div class="row">
			    <form class="col s12" method="POST" action="{{route('mail')}}" style="padding: 0px;">
     				{{ csrf_field() }}
				    <div class="row">
				        <div class="input-field col s12 m6">
				          	<input id="nombre" name="nombre" type="text" class="validate" required>
				          	<label for="nombre">{{ Lang::get('general.nombre') }}</label>
				        </div>
				        <div class="input-field col s12 m6">
				          	<input id="apellido" name="apellido" type="text" class="validate" required>
				          	<label for="apellido">Apellido</label>
				        </div>
				    </div>
				    <div class="row">
				        <div class="input-field col s12 m6">
				          	<input id="email" name="email" type="email" class="validate">
				          	<label for="email">{{ Lang::get('general.email') }}</label>
				        </div>
				      	<div class="input-field col s12 m6">
				          	<input id="empresa" name="empresa" type="text" class="validate" required>
				          	<label for="empresa">{{ Lang::get('general.empre') }}</label>
				        </div>
				    </div>
				    <div class="row">
				      	<div class="input-field col s12 m6">
				          	<textarea id="mensaje" name="mensaje" class="materialize-textarea" required></textarea>
				          	<label for="mensaje">{{ Lang::get('general.mensaje') }}</label>
				        </div>
				        <div class="col s12 m6">
				        	<div class="row">
					        	<div class="form-group">
									<div class="g-recaptcha" data-sitekey="6LdFZJ0UAAAAAJnjuE04D3irkvCgkDyPhq7isVDi"></div>
								</div>	
				        	</div>
				    		
							
				    	</div>
				    </div>
			      	<div class="row">
		    			<div class="col s12 boton" style="padding-left: 0; padding-top: 2%;"">
		    				<input type="submit" class="btn waves-effect waves-light" value="{{ Lang::get('general.enviar') }}">
		    			</div>
		    		</div>
			    </form>
			  </div>
		</section>
	</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection