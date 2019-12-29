@extends('pages.templates.cuerpo')

@section('titulo','Producto')

@section('estilo')

  <link rel="stylesheet" href="{{ asset('css/page/subproducto.css') }}">

@endsection

@section('paginas')

<?php 

  $i=0;

  $rows=count($productos);

?>

<div class="container-fluid" style="margin: 5% 7%; position: relative;">

  <div class="row">

    <div class="col s12 m6 l3">

      {{-- <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons" style="margin: 0px;">menu</i></a></div> --}}

      <ul id="nav-mobile" class="side-nav fixed" style="position: relative; box-shadow: none; display: inline;">

        @foreach($subfamilias as $subfamilia)

          <ul class="collapsible collapsible-accordion">

            <li class="bold"><a href="{{route("subproducto",$subfamilia->id)}}" class="hover collapsible-header waves-effect waves-admin <?php if($subfamilia->id == $seleccionada->id || $subfamilia->id == $seleccionada->id_familia){?> active <?php } ?>">{{$subfamilia->titulo }}<i class="material-icons" style="margin: 0px;">expand_more</i></a>

              <div class="collapsible-body">

                @foreach($subfamilias2 as $subfamilia2)

                  @if($subfamilia2->id_familia == $subfamilia->id)

                    <ul>

                      <li><a class="hover producto <?php if($subfamilia2->id == $seleccionada->id){?>active2 <?php } ?>" href="{{route("subproducto",$subfamilia2->id)}}">{{$subfamilia2->titulo }}</a>

                        <div class="callapsible-body" style="margin-left: 15px;">

                          @foreach($productos as $producto)

                            @if($producto->id_subfamilia == $subfamilia2->id)

                              <ul class="height">

                                <li class="height"><a class="hover producto" href="{{route("subgaleria",$producto->id)}}">{{$producto->titulo }}</a></li>

                              </ul>

                            @endif

                          @endforeach

                        </div>

                      </li>

                    </ul>

                  @endif

                @endforeach

                @foreach($productos as $producto)

                  @if($producto->id_subfamilia == $subfamilia->id)

                    <ul class="height">

                      <li class="height"><a class="hover producto" href="{{route("subgaleria",$producto->id)}}">{{$producto->titulo }}</a></li>

                    </ul>

                  @endif

                @endforeach

              </div>

            </li>

          </ul>

        @endforeach

      </ul>

    </div>

    <div class="col s12 m6 l9">

      <div class="row">

        <nav class="sub-breadcrumb">

          <div class="nav-wrapper">

            <div class="col s12">

              

              @foreach($subfamilias2 as $familia)

                @if($familia->id == $seleccionada->id_familia)

                  <a style="text-transform: uppercase; font-family: 'Montserrat', sans-serif;" href="{{route('subproducto',$familia->id)}}" class="breadcrumb">{{$familia->titulo }}</a>

                @endif

              @endforeach

              <a style="text-transform: uppercase; color: #ff0000 !important; font-family: 'Montserrat', sans-serif;" href="{{route('subproducto',$seleccionada->id)}}" class="breadcrumb">{{$seleccionada->titulo }}</a>

            </div>

          </div>

        </nav>

      </div>

      <div class="row">

        @foreach($familias as $familia)

          @if($seleccionada->id == $familia->id_familia)

            <div class="col s12 l4" style="margin-bottom: 20px; ">

              <a href="{{route("subproducto",$familia->id)}}" class="div-sub">
                <div style="width: 100%;display:  flex;height:  100%;justify-content:  center;align-items:  center;">
                  <img class="responsive-img" src="{{asset($familia->imagen)}}" alt="" style="max-height: 100%;">
                </div>
                

                <div class="producto-hover"></div>

              </a>

              <div class="barra-producto">

                <p class="producto2" style="margin-top: 5px;">{{$familia->titulo }}</p>

              </div>

            </div>

          @endif

        @endforeach

        @foreach($productos as $producto)

          @if($seleccionada->id == $producto->id_subfamilia)

            <div class="col s12 l4" style="margin-bottom: 40px; ">

              <a href="{{route("subgaleria",$producto->id)}}" class="div-sub">
              <div style="width: 100%;display:  flex;height:  100%;justify-content:  center;align-items:  center;">
                <img class="responsive-img" src="{{asset($producto->imagen_destacada)}}" alt="" style="max-height: 100%;">
              </div>
                

                <div class="producto-hover"></div>

              </a>

              <div class="barra-producto">

                <p class="producto2" style="margin-top: 5px;">{{$producto->titulo }}</p>

              </div>

            </div>

          @endif

        @endforeach

        

      </div>

    </div> 

  </div>

  

</div>

  

<script>

  // Initialize collapse button

  $(".button-collapse").sideNav();

  // Initialize collapsible (uncomment the line below if you use the dropdown variation)

  //$('.collapsible').collapsible();

</script>

@endsection