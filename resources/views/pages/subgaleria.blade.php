@extends('pages.templates.cuerpo')

@section('titulo','Producto - '.$producto->titulo )

@section('estilo')

  <link rel="stylesheet" href="{{ asset('css/page/subproducto.css') }}">

 <link rel="stylesheet" href="{{ asset('css/page/slider.css') }}">

 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@endsection

@section('paginas')

  <div class="container-fluid" style="margin: 5% 7%;">

    

    <div class="row">

      <div class="col s12 m3">

        <ul id="nav-mobile" class="side-nav fixed" style="position: relative; box-shadow: none; display: inline;">

          @foreach($subfamilias as $subfamilia)

            <ul class="collapsible collapsible-accordion">

              <li class="bold"><a class="hover collapsible-header waves-effect waves-admin <?php if($subfamilia->id == $seleccionada->id || $subfamilia->id == $seleccionada->id_familia){?> active <?php } ?>">{{$subfamilia->titulo }}<i class="material-icons" style="margin: 0px;">expand_more</i></a>

                <div class="collapsible-body">

                  @foreach($subfamilias2 as $subfamilia2)

                    @if($subfamilia2->id_familia == $subfamilia->id)

                      <ul>

                        <li><a class="hover producto <?php if($subfamilia2->id == $seleccionada->id){?>active2 <?php } ?>" href="{{route("subproducto",$subfamilia2->id)}}">{{$subfamilia2->titulo }}</a>

                          <div class="callapsible-body" style="margin-left: 15px;">

                            @foreach($productos as $producto3)

                              @if($producto3->id_subfamilia == $subfamilia2->id)

                                <ul>

                                  <li><a class="hover producto" href="{{route("subgaleria",$producto3->id)}}">{{$producto3->titulo }}</a></li>

                                </ul>

                              @endif

                            @endforeach

                          </div>

                        </li>

                      </ul>

                    @endif

                  @endforeach

                  @foreach($productos as $producto2)

                    @if($producto2->id_subfamilia == $subfamilia->id)

                      <ul>

                        <li><a class="hover producto" href="{{route("subgaleria",$producto2->id)}}">{{$producto2->titulo }}</a></li>

                      </ul>

                    @endif

                  @endforeach

                </div>

              </li>

            </ul>

          @endforeach

        </ul>

      </div>

      <div class="col s12 m9">

        <div class="row">

          <nav class="sub-breadcrumb">

            <div class="nav-wrapper">

              <div class="col s12">

                <a style="text-transform: uppercase;" href="{{route('familia')}}" class="breadcrumb">Soplado</a>

                <a style="text-transform: uppercase;" href="{{route('subproducto',$familia2->id)}}" class="breadcrumb">{{$familia2->titulo }}</a>

                <a style="text-transform: uppercase;" href="{{route('subgaleria',$producto->id)}}" class="breadcrumb">{{$producto->titulo }}</a>

              </div>

            </div>

          </nav>

        </div>

        <div class="row">

          <div class="col s12 m6" style="padding-left: 0px; ">

            <div class="row">

              <div class="col s12" style="padding-left: 0px;">

                <?php $i=0; ?>

                @foreach($imagenes as $imagen)

                  @if($i==0)

                  <div class="cont-img">

                    <img class="responsive-img" id="producto" src="{{asset($imagen->imagen)}}" style="width: 100%;" alt="">

                    <?php $i++; ?>

                  </div>

                  

                  @endif

                @endforeach

              </div>

            </div>

            <div class="row">

              <?php

                  $rows=count($imagenes);

              ?> 

              @if($rows>1)

                @foreach($imagenes as $imagen)

                  <div class="col s4 m2"  style="padding-left: 0px;">

                      <div class="cont-img" style="border-radius: 5px;">

                        <img class="responsive-img" src="{{asset($imagen->imagen)}}" alt="" onclick="actualizar('{{asset($imagen->imagen)}}')">

                      </div>

                  </div>

                @endforeach

              @endif

            </div>

          </div>

          <div class="col s12 m6">

            <p class="titulo-galeria">{{$producto->titulo }}</p>

            <div class="raya"></div>

            <div class="row contenido">

              {!!$producto->contenido !!}

            </div>

          </div>

        </div>

        <div class="row">

          <div class="col s12">

            @if($producto->tabla)

              {!!$producto->tabla!!}

            @endif

          </div>

        </div>

      </div>

      

    </div>

    

  </div>

  <script>

    function actualizar(imagen){

      document.getElementById('producto').src = imagen;

    }

  </script>



<script>

var slideIndex = 1;

showDivs(slideIndex);



function plusDivs(n) {

  showDivs(slideIndex += n);

}



function currentDiv(n) {

  showDivs(slideIndex = n);

}



function showDivs(n) {

  var i;

  var x = document.getElementsByClassName("mySlides");

  var dots = document.getElementsByClassName("demo");

  if (n > x.length) {slideIndex = 1}    

  if (n < 1) {slideIndex = x.length}

  for (i = 0; i < x.length; i++) {

     x[i].style.display = "none";  

  }

  for (i = 0; i < dots.length; i++) {

     dots[i].className = dots[i].className.replace(" w3-white", "");

  }

  x[slideIndex-1].style.display = "block";  

  dots[slideIndex-1].className += " w3-white";

}

</script>



@endsection