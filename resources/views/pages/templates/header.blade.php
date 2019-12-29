<header>

  <div class="container-fluid top" style="margin: 0px 7%;height: 42px; position: relative;">

    <div class="cont-header">

      @foreach($redes as $red)

        @if($red->ubicacion==='header')

          <div class="li-red">

            <a href="{{ $red->link }}">

              <img src="{{asset($red->logo)}}" alt="">
          
            </a>

          </div>

        @endif

      @endforeach

      {!!  Form::open(['route' => 'buscar', 'method' => 'POST', 'id'=>'buscador']) !!}

        <input type="search" id="buscar" name="buscar">

      {!! Form::close() !!} 

    </div>

  </div>

  

  <nav class="header" style="box-shadow: none;">

    <div class="nav-wrapper" style="margin: 0px 7%; ">
      <a href="#" data-activates="mobile-demo" class="button-collapse" style="color: black;"><i class="material-icons li-ppal" >menu</i></a>

      <div class="cont">

        <div style="height:  150px; position:  relative; display:  flex; justify-content:  space-between;">

          <div class="li-hover "><a class="{{ Request::segment(1) === 'empresa' ? 'active-ppal' : null }} li-ppal" href="{{route('empresa')}}">EMPRESA</a></div>

          <div class="li-hover"><a class="{{ Request::segment(1) === 'familia' ? 'active-ppal' : null }} li-ppal" href="{{route('familia')}}">SOPLADO</a></div>

          <div class="li-hover"><a class="{{ Request::segment(1) === 'inyeccion' ? 'active-ppal' : null }} li-ppal" href="{{route('inyeccion')}}">INYECCIÓN</a></div>

         

            <a href="{{route('index')}}" class="brand-logo left"><img class="responsive-img logo" src="{{asset($logohead->ruta)}}" width="240px" alt=""> </a>

          

          <div class="li-hover"><a class="{{ Request::segment(1) === 'impresion' ? 'active-ppal' : null }} li-ppal" href="{{route('impresion')}}">IMPRESIÓN 3D</a></div>

          <div class="li-hover"><a class="{{ Request::segment(1) === 'matriceria' ? 'active-ppal' : null }} li-ppal" href="{{route('matricerio')}}">MATRICERÍA</a></div>

          <div class="li-hover"><a class="{{ Request::segment(1) === 'contacto' ? 'active-ppal' : null }} li-ppal" href="{{route('contacto')}}">CONTACTO</a></div>

        </div>





      </div>

      

      <ul class="side-nav" id="mobile-demo">

        <li><a href="{{route('empresa')}}">Empresa</a></li>
        <li><a href="{{route('familia')}}">Soplado</a></li>
        <li><a href="{{route('inyeccion')}}">Inyección</a></li>
        <li><a href="{{route('impresion')}}">Impresión 3D</a></li>
        <li><a href="{{route('matricerio')}}">Matriceria</a></li>
        <li><a href="{{route('contacto')}}">Contacto</a></li>

      </ul>

    </div>

  </nav>   

</header>