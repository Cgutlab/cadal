<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>@yield('titulo')</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('plugins/materialize/css/materialize.min.css') }}">

    <link rel="icon"  sizes="16x16"  type="image/x-icon" href="{{asset($favicon->ruta)}}"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="keywords" content="{{ $metadatos->keywords }}">

    <meta name="description" content="{{ $metadatos->description }}">

    <script src="{{ asset('plugins/materialize/js/jquery.min.js') }}"></script>

    <!-- Materialize Core JavaScript -->

    <script src="{{ asset('plugins/materialize/js/materialize.min.js') }}"></script>

    

    <!--Estilos propios-->

    <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">

    @yield('estilo')

    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>

<body>

    @include('pages.templates.header')

        <main>@yield('paginas')</main>

    @include('pages.templates.footer')

    <script>

        $(".dropdown-button1").dropdown();

        $(".dropdown-button2").dropdown();

        $(".button-collapse").sideNav()

    </script>

    <script>

        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });

    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118896288-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-118896288-1');
    </script>

</body>

</html>