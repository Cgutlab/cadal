

  <footer class="page-footer">

      <div class="container-fluid" style="padding-top: 50px; padding-bottom: 50px;">

        <div class="row" style="margin-bottom: 0px;">

          <div class="col s12 m6 l6" style="margin-top: 4%;">

            <div class="row">

              <div class="col s12 m6" style="padding-top: 10px;">

                <a href="{{route('index')}}"><img class="responsive-img" src="{{asset($logofoot->ruta)}}"  alt=""></a>

                

              </div>

            </div>

            

          </div>

          <div class="col s12 m6 l2 offset-l1">

            <h5 class="titulo-footer" style="margin-left: 10px;">SITEMAP</h5>

            <div class="row">

              <div class="col s12">

                <div class="row"  style="margin: 2px;">

                  <div class="col s12 li" style="padding: 0px;"><a href="{{route('index')}}">Home</a></div>

                </div>

                <div class="row"  style="margin: 2px;">

                  <div class="col s12 li" style="padding: 0px;"><a href="{{route('empresa')}}">Empresa</a></div>

                </div>

                <div class="row"  style="margin: 2px;">

                  <div class="col s12 li" style="padding: 0px;"><a href="{{route('familia')}}">Soplado</a></div>

                </div>

                <div class="row"  style="margin: 2px;">

                  <div class="col s12 li" style="padding: 0px;"><a href="{{route('inyeccion')}}">Inyección</a></div>

                </div>

                <div class="row"  style="margin: 2px;">

                  <div class="col s12 li" style="padding: 0px;"><a href="{{route('impresion')}}">Impresi&oacuten 3D</a></div>

                </div>

                <div class="row"  style="margin: 2px;">

                  <div class="col s12 li" style="padding: 0px;"><a href="{{route('matricerio')}}">Matricería</a></div>

                </div>

                <div class="row"  style="margin: 2px;">

                  <div class="col s12 li" style="padding: 0px;"><a href="{{route('contacto')}}">Contacto</a></div>

                </div>

              </div>

            </div>

          </div>

          <div class="col s12 m6 l3 padding-in">

              <h5 class="titulo-footer">CONTACTO</h5>

              <div class="row">

                  <div class="col m2">

                    <img src="{{asset('img/generico/ubicacion.png')}}" alt="">

                  </div>

                  <div class="col m10">

                    {{$direccion->descripcion}}

                  </div>

              </div>

              <div class="row">

                

                    <div class="col m2">

                      <img src="{{asset('img/generico/telefono.png')}}" alt="">

                    </div>

                    <div class="col m10">
                      <a style="color: white;" href="tel:{{$telefono->descripcion}}">
                        @php($var = explode(",", $telefono->descripcion))
                        @forelse ($var as $d)
                             <p style="margin: 0px 0px; padding: 0px">{{ $d }}</p> 
                        @empty
                                 
                        @endforelse
                       
                      </a>
                    </div>

              </div>
                <div class="row">

                

                    <div class="col m2">

                      <img src="{{asset('img/generico/telefono.png')}}" alt="">

                    </div>

                    <div class="col m10">
                      <a style="color: white;" href="https://wa.me/5491157951834" target="_blank">
                             <p style="margin: 0px 0px; padding: 0px">WA: +54 9 11 57951834</p>
                      </a>
                    </div>

              </div>
              <div class="row">

                    <div class="col m2">

                      <img src="{{asset('img/generico/correo.png')}}" alt="">

                    </div>

                    <div class="col m10">

                      <a style="color: white;" href="mailto:{{$mail->descripcion}}">
                      {{$mail->descripcion}}
                      </a>

                    </div>

              </div>

          </div>

        </div>

          

    </div>

  </footer>