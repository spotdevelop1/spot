<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa con Búsqueda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,700&display=swap" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-eduwell-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
    <link rel="stylesheet" href="{{ asset('css/map.css') }}">

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

</head>

<body>
    <!-- Aquí empieza el código copiado del navbar de index.blade.php -->
    <nav class="header-area header-sticky background-header">
        <!-- Aquí va todo el contenido del navbar -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo respont-logo">
                            <img src="{{asset('images/logo.png')}}" alt="EduWell Template" class="img-logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="{{(request () -> is ('/')) ? 'btn-enalce': ''}}"><a href="/" class="h-color {{(request () -> is ('/')) ? 'active': ''}} style-text">Inicio</a></li>
                            <li class="{{(request () -> is ('recarga')) ? 'btn-enalce': ''}}"><a href="{!! URL::to('recarga')!!}" class="h-color {{(request () -> is ('recarga')) ? 'active': ''}} style-text">Saldo</a></li>
                            <li class="{{(request () -> is ('planes')) ? 'btn-enalce': ''}}"><a href="{!! URL::to('planes')!!}" class="h-color {{(request () -> is ('planes')) ? 'active': ''}} style-text">Paquetes</a></li>
                            <!-- Nuevo enlace al mapa -->
                            <li class="{{(request()->is('mapa')) ? 'btn-enalce' : ''}}"><a href="{!! URL::to('mapa') !!}" class="h-color {{(request()->is('mapa')) ? 'active' : ''}} style-text">Mapa</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>

    </nav>
    <!-- Aquí termina el código del navbar -->
    
    <div class="container-fluid p-0">
    <div class="row no-gutters full-height">
        <div id="search-container">
            <!-- Particles.js container -->
            <div id="particles-js"></div>
            
            <div class="search-box">
                <input id="search-input" type="text" class="form-control" placeholder="Busca una dirección...">
            </div>
            <aside class="map-coverage-legend">
                <h2 class="legend-title">Mapa de color de cobertura</h2>
                <ul class="coverage-list">
                    <li class="coverage-item">
                        <span class="color-indicator low"></span>
                        <span class="color-description">Baja</span>
                    </li>
                    <li class="coverage-item">
                        <span class="color-indicator moderate"></span>
                        <span class="color-description">Moderada</span>
                    </li>
                    <li class="coverage-item">
                        <span class="color-indicator decent"></span>
                        <span class="color-description">Decente</span>
                    </li>
                    <li class="coverage-item">
                        <span class="color-indicator good"></span>
                        <span class="color-description">Buena</span>
                    </li>
                </ul>
            </aside>
            </div>
        <div id="map-container">
            <div id="map"></div>
        </div>
    </div>
</div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/isotope.min.js')}}"></script>
    <script src="{{asset('js/owl-carousel.js')}}"></script>
    <script src="{{asset('js/lightbox.js')}}"></script>
    <script src="{{asset('js/tabs.js')}}"></script>
    <script src="{{asset('js/video.js')}}"></script>
    <script src="{{asset('js/slick-slider.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{ asset('js/mapStyles.js') }}"></script>
    <script src="{{ asset('js/map.js') }}"></script>
    <script src="{{asset('js/particles.min.js')}}"></script>
    <script src="{{asset('js/particles-config.js')}}"></script>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap&libraries=places,geometry"></script>


</body>

</html>