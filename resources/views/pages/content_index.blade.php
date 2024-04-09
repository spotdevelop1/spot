@extends('layouts.index')
@section('content')


  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner mt5">
      <div class="carousel-item active position-relative d-inline-block" data-bs-interval="4000">
        <div class="position-absolute mt-14 pl-8">
          <h1 class="color-slogan col-6 w900 style-text d-none d-sm-block pri-texto">Contrata y disfruta de los paquetes que tenemos para ti.</h1>
          <p class="mt-4 text-white h4 hmd col-6 w400 style-text d-none d-sm-block cont-texto">Contrata y navega con los diferentes paquetes de internet que tenemos para ti, disfruta de tus series y películas favoritas.</p>
          <span class="text-white h3 hmds w600 style-text style-text d-none d-sm-block spt-texto">¡SpotUno te ofrece solo lo mejor!</span>

          {{--  Responivo  --}}
          <h1 class="color-slogan col-10 w900 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block mt-4 text-center">Contrata y disfruta de los paquetes que tenemos para ti.</h1>
          <p class="mt-4 text-white h6 text-center col-10 w400 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block">Contrata y navega con los diferentes paquetes de internet que tenemos para ti, disfruta de tus series y películas favoritas.</p>
          <span class="text-white h3 w600 style-text text-center d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block">¡SpotUno te ofrece solo lo mejor!</span>
          {{--  Responsivo  --}}

          <div class="d-flex flex-row mt-n2">
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('recarga')!!}" class="btn btn-primary btn-lg active br-radiu w400 style-text" role="button" aria-pressed="true">¡Contratar ahora!</a>
            </div>
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('planes')!!}" class="btn btn-primary btn-lg active br-radiu vr-paquete w400 style-text" role="button" aria-pressed="true">Ver paquetes</a>
            </div>
          </div>
        </div>
        
        <img src="{{asset('images/Banner-principal.jpg')}}" class="d-block w-100 d-none d-sm-block" alt="imagen1">
        {{--  Responsivo  --}}
        <img src="{{asset('images/Banner-respon.jpg')}}" class="d-block w-100 d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block" alt="imagen1">
        {{--  Responsivo  --}}
      </div>

      <div class="carousel-item" data-bs-interval="5000">
        <div class="position-absolute mt-14 pl-8">
          <h1 class="color-slogan col-6 w900 style-text d-none d-sm-block pri-texto">Contrata y disfruta de los paquetes que tenemos para ti.</h1>
          <p class="mt-4 color-slogan2 h4 hmd col-5 w400 style-text d-none d-sm-block cont-texto">Contrata y navega con los diferentes paquetes de internet que tenemos para ti, disfruta de tus series y películas favoritas.</p>
          <span class="color-slogan2 h3 hmds w600 style-text style-text d-none d-sm-block spt-texto">¡SpotUno te ofrece solo lo mejor!</span>

          {{--  Responsivo  --}}
          <h1 class="color-slogan col-10 w900 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block mt-4 text-center">Contrata y disfruta de los paquetes que tenemos para ti.</h1>
          <p class="mt-4 color-slogan2 h6 text-center col-10 w400 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block">Contrata y navega con los diferentes paquetes de internet que tenemos para ti, disfruta de tus series y películas favoritas.</p>
          <span class="color-slogan2 h3 w600 style-text text-center d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block">¡SpotUno te ofrece solo lo mejor!</span>
          {{--  Responsivo  --}}

          <div class="d-flex flex-row mt-n2">
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('recarga')!!}" class="btn btn-primary btn-lg active br-radiu vr-paquete1 w400 style-text" role="button" aria-pressed="true">¡Contratar ahora!</a>
            </div>
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('planes')!!}" class="btn btn-primary btn-lg active br-radiu vr-paquete2 w400 style-text color-slogan2" role="button" aria-pressed="true">Ver paquetes</a>
            </div>
          </div>
        </div>
        
        <img src="{{asset('images/Banner-secundario.jpg')}}" class="d-block w-100 d-none d-sm-block" alt="imagen2">
        {{--  Responsivo  --}}
        <img src="{{asset('images/Banner-respon2.jpg')}}" class="d-block w-100 d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block" alt="imagen2">
        {{--  Responsivo  --}}
      </div>

      <div class="carousel-item" data-bs-interval="4000">
        <div class="position-absolute mt-14 pl-8">
          <h1 class="color-slogan text-white col-6 w900 style-text d-none d-sm-block pri-texto">Contrata y disfruta de los paquetes que tenemos para ti.</h1>
          <p class="color-slogan mt-4 text-white h4 hmd col-6 w400 style-text d-none d-sm-block cont-texto">Contrata y navega con los diferentes paquetes de internet que tenemos para ti, disfruta de tus series y películas favoritas.</p>
          <span class="color-slogan text-white h3 hmds w600 style-text style-text d-none d-sm-block spt-texto">¡SpotUno te ofrece solo lo mejor!</span>

          {{--  Responsivo  --}}
          <h1 class="color-slogan text-white col-10 w900 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block mt-4 text-center">Contrata y disfruta de los paquetes que tenemos para ti.</h1>
          <p class="mt-4 text-white h6 text-center col-10 w400 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block">Contrata y navega con los diferentes paquetes de internet que tenemos para ti, disfruta de tus series y películas favoritas.</p>
          <span class="text-white h3 w600 style-text text-center d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block">¡SpotUno te ofrece solo lo mejor!</span>
          {{--  Responsivo  --}}

          <div class="d-flex flex-row mt-n2">
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('recarga')!!}" class="btn btn-primary btn-lg active br-radiu w400 style-text" role="button" aria-pressed="true">¡Contratar ahora!</a>
            </div>
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('planes')!!}" class="btn btn-primary btn-lg active br-radiu vr-paquete w400 style-text" role="button" aria-pressed="true">Ver paquetes</a>
            </div>
          </div>
        </div>

        <img src="{{asset('images/Banner-terciario.jpg')}}" class="d-block w-100 d-none d-sm-block" alt="imagen3">
        {{--  Responsivo  --}}
        <img src="{{asset('images/Banner-respon3.jpg')}}" class="d-block w-100 d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block" alt="imagen3">
        {{--  Responsivo  --}}
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<section class="pricing bg-shape">
  <div class="container">
    <div class="row">
      <div class="col-12 d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
        <div class="d-flex flex-row">
          <div class="img-banner">
            <img src="{{asset('images/Banner-peque.jpg')}}" alt="Banner secundario" class="img-bannerSecundario">
          </div>
          <div>
            <h2 class="color-titulo style-text w800">¿Quiénes somos?</h2>
              <p class="text-quienes_somos style-text w500">
                Somos una empresa que ofrece conexiones a internet de banda ancha en áreas de difícil acceso por
                los operadores tradicionales, además de conexiones de internet a alta velocidad también en zonas urbanas.
              </p>
              <ul class="iconos-informacion">
                <li class="iconos-informacion__img">
                  <div class="d-flex flex-row">
                    <img src="{{asset('images/Pont-check.png')}}" alt="Imagen1" class="Pont-check">
                    <p class="color-texto iconos-informacion__texto style-text w700">Wifi en todos tus dispositivos</p></div>
                </li>
                <li class="iconos-informacion__img">
                  <div class="d-flex flex-row">
                    <img src="{{asset('images/Pont-check.png')}}" alt="Imagen2" class="Pont-check">
                    <p class="color-texto iconos-informacion__texto style-text w700">Soporte 24/7</p>
                  </div>
                </li>
                <li class="iconos-informacion__img">
                  <div class="d-flex flex-row">
                    <img src="{{asset('images/Pont-check.png')}}" alt="Imagen3" class="Pont-check">
                    <p class="color-texto iconos-informacion__texto style-text w700">Los mejores planes</p>
                  </div>
                </li>
                <li class="iconos-informacion__img">
                  <div class="d-flex flex-row">
                    <img src="{{asset('images/Pont-check.png')}}" alt="Imagen4" class="Pont-check">
                    <p class="color-texto iconos-informacion__texto style-text w700">Personal capacitado</p>
                  </div>
                </li>
            </ul>
          </div>
        </div>
      </div>   

      <div class="col-12 d-xl-none d-lg-none d-xl-block ">
        <div class="d-flex flex-column bd-highlight mb-3">
          <div class="img-banner">
            <img src="{{asset('images/Banner-peque.jpg')}}" alt="Banner secundario" class="img-bannerSecundario">
          </div>
          <div>
            <h2 class="color-titulo style-text w800">¿Quiénes somos?</h2>
              <p class="text-quienes_somos style-text w500">
                Somos una empresa que ofrece conexiones a internet de banda ancha en áreas de difícil acceso por
                los operadores tradicionales, además de conexiones de internet a alta velocidad también en zonas urbanas.
              </p>
              <ul class="iconos-informacion">
                <li class="iconos-informacion__img">
                  <div class="d-flex flex-row">
                    <img src="{{asset('images/Pont-check.png')}}" alt="Imagen1" class="Pont-check">
                    <p class="color-texto iconos-informacion__texto style-text w700">Wifi en todos tus dispositivos</p></div>
                </li>
                <li class="iconos-informacion__img">
                  <div class="d-flex flex-row">
                    <img src="{{asset('images/Pont-check.png')}}" alt="Imagen2" class="Pont-check">
                    <p class="color-texto iconos-informacion__texto style-text w700">Soporte 24/7</p>
                  </div>
                </li>
                <li class="iconos-informacion__img">
                  <div class="d-flex flex-row">
                    <img src="{{asset('images/Pont-check.png')}}" alt="Imagen3" class="Pont-check">
                    <p class="color-texto iconos-informacion__texto style-text w700">Los mejores planes</p>
                  </div>
                </li>
                <li class="iconos-informacion__img">
                  <div class="d-flex flex-row">
                    <img src="{{asset('images/Pont-check.png')}}" alt="Imagen4" class="Pont-check">
                    <p class="color-texto iconos-informacion__texto style-text w700">Personal capacitado</p>
                  </div>
                </li>
            </ul>
          </div>
        </div>
      </div>     
  </div>
</section>

<section>
  <div>  {{--  class="container"  --}}
    <div class="row">
      <div class="col color-apart p-3">
        <h3 class="text-white mb-3 text-center p-3 style-text w400">¿Aún no eres parte de <spa class="style-text w800">SpotUno</spa>?</h3>
        <h5 class="text-white text-center w400 style-text">¿Qué esperas? adquiérelo y disfruta de todos los beneficios</h5>
        <div class="col text-center p-3">
          <button type="button" class="btn btn-outline-secondary btn-border w400 style-text">¡Solicítalo ya!</button>
        </div>
      </div>
      <div class="col color-paquet p-3">
        <h3 class="text-white mb-3 text-center p-3 style-text w400">Disfruta de todo <span class="style-text w800">nuestros paquetes</span></h3>
        <h5 class="text-white text-center w400 style-text">Queremos ofrecerte solo lo mejor, seleccina, compra y disfruta</h5>
        <div class="col text-center p-3">
            <a href="{!! URL::to('planes')!!}" class="btn btn-outline-secondary btn-border w400 style-text">Ver paquetes</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pricing bg-shape mt-0">
  <div class="container-fluid bg-secondary booking-velocidad mb-1 mt-0 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container pbRecarga">
          <div class="row gx-5">
              <div class="col-lg-5 pt-5 ">
                  <div>
                    <canvas id="canvas"></canvas>
                  </div>
                  <div class="py-5 mt-recarga">
                    <div>
                      <h1 class="text-white color-tl mb-2 text-start display-4 ft-text col-12 w700-italic style-text">
                        Disfruta de navegar con la mejor {{--  <span class="fw-bolder bg-velocidad">velocidad</span> --}}
                      </h1>
                      <h1 class="text-white color-tl text-start display-4 ft-text col-12 w900 style-text">
                        velocidad
                      </h1>
                    </div>
                    <div class="ms-4">
                      <button class="btn btn-contratar mt-4 w-40 text-center" type="button"><span class="span-contratar w800 style-text">Contratar</span> </button>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        
        <div class="burbujas">
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
        </div>

      </div>
    </div>
    <div class="row" style="background-color: #c6e4ff; ">
      <div class="col-lg-12">
        <div class="d-flex justify-content-center">
          <div class="rayo">
            <img src="{{asset('images/Rayo.png')}}" alt="Imagen4" class="img-rayo">
          </div>
          <div class="section-heading section-heading__text">
            <h2 class="mb-3 color-text-planes style-text w500">¡Tenemos los mejores planes!</h2>
            <h2><span class="texto-planes style-text w900">¡Obten el que más te guste!</span></h2>
          </div>
        </div>
      </div>
      
      <!-- <div class="d-flex justify-content-center">
        <div class="col-lg-3 col-md-6 p-3">
          <div class="pricing-table text-center feature_item font-color">
            <div class="title">
              <h3 class="texto-principal style-text w500">Básico</h3>
            </div>

            <div class="price color-basico d-flex flex-row">
                <div class="col-sm tarjeta-paquete">
                  <img src="{{asset('images/280.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                </div>
                <div class="col-sm mes-paquete">
                  <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
                </div> 
            </div>

            <ul class="feature-list">
              <li class="style-text w500">1 Mb Subida</li>
              <li class="style-text w500">5 Mb Bajada</li>
              <li class="style-text w500">Instalación GRATIS</li>
              <li class="resticciones style-text w200">* aplican restricciones</li>
              <hr class="hr-basico">
            </ul>
            <div class="action-button">
              <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB style-text w800">¡Lo quiero!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 p-3">
          <div class="pricing-table featured text-center font-color">
            <div class="title">
              <h3 class="texto-principal style-text w500">Ideal</h3>
            </div>

            <div class="price color-ideal d-flex flex-row">
              <div class="col-sm tarjeta-paquete">
                <img src="{{asset('images/320.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
              </div>
              <div class="col-sm mes-paquete">
                <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
              </div> 
            </div>

            <ul class="feature-list">
              <li class="style-text w500">A2 Mb Subida</li>
              <li class="style-text w500">10 Mb Bajada</li>
              <li class="style-text w500">Instalación GRATIS</li>
              <li class="resticciones style-text w200">* aplican restricciones</li>
            </ul>
            <hr class="hr-ideal">
            <div class="action-button">
              <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceI style-text w800">¡Lo quiero!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 p-3">
          <div class="pricing-table text-center feature_item font-color">
            <div class="title">
              <h3 class="texto-principal style-text w500">Plus</h3>
            </div>

            <div class="price color-plus d-flex flex-row">
              <div class="col-sm tarjeta-paquete">
                <img src="{{asset('images/360.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
              </div>
              <div class="col-sm mes-paquete">
                <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
              </div> 
            </div>

            <ul class="feature-list">
              <li class="style-text w500">5 Mb Subida</li>
              <li class="style-text w500">15 Mb Bajada</li>
              <li class="style-text w500">Instalación GRATIS</li>
              <li class="resticciones style-text w200">* aplican restricciones</li>
            </ul>
            <hr class="hr-plus">
            <div class="action-button">
              <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceP style-text w800">¡Lo quiero!</a>
            </div>
          </div>
        </div>

      </div> -->

      <!-- <div class="col-lg-12">
        <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
          <div class="item">
            <div class="pricing-table text-center feature_item font-color">
              <div class="title">
                <h3 class="texto-principal style-text w500">Básico</h3>
              </div>

              <div class="price color-basico d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <img src="{{asset('images/280.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                  </div>
                  <div class="col-sm mes-paquete">
                    <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
                  </div> 
              </div>

              <ul class="feature-list">
                <li class="style-text w500">1 Mb Subida</li>
                <li class="style-text w500">5 Mb Bajada</li>
                <li class="style-text w500">Instalación GRATIS</li>
                <li class="resticciones style-text w200">* aplican restricciones</li>
                <hr class="hr-basico">
              </ul>
              <div class="action-button">
                <a href="" class="btn btn-main-rounded btn-priceB style-text w800">¡Lo quiero!</a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="pricing-table featured text-center font-color">
              <div class="title">
                <h3 class="texto-principal style-text w500">Ideal</h3>
              </div>

              <div class="price color-ideal d-flex flex-row">
                <div class="col-sm tarjeta-paquete">
                  <img src="{{asset('images/320.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                </div>
                <div class="col-sm mes-paquete">
                  <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
                </div> 
              </div>

              <ul class="feature-list">
                <li class="style-text w500">A2 Mb Subida</li>
                <li class="style-text w500">10 Mb Bajada</li>
                <li class="style-text w500">Instalación GRATIS</li>
                <li class="resticciones style-text w200">* aplican restricciones</li>
              </ul>
              <hr class="hr-ideal">
              <div class="action-button">
                <a href="" class="btn btn-main-rounded btn-priceI style-text w800">¡Lo quiero!</a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="pricing-table text-center feature_item font-color">
              <div class="title">
                <h3 class="texto-principal style-text w500">Plus</h3>
              </div>

              <div class="price color-plus d-flex flex-row">
                <div class="col-sm tarjeta-paquete">
                  <img src="{{asset('images/360.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                </div>
                <div class="col-sm mes-paquete">
                  <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
                </div> 
              </div>

              <ul class="feature-list">
                <li class="style-text w500">5 Mb Subida</li>
                <li class="style-text w500">15 Mb Bajada</li>
                <li class="style-text w500">Instalación GRATIS</li>
                <li class="resticciones style-text w200">* aplican restricciones</li>
              </ul>
              <hr class="hr-plus">
              <div class="action-button">
                <a href="" class="btn btn-main-rounded btn-priceP style-text w800">¡Lo quiero!</a>
              </div>
            </div>
          </div>

        </div>
      </div> -->

      <div class="row ps-5" style="justify-content: center;">
        <div class="col-lg-4  col-md-6">
          <div class="pricing-table text-center feature_item font-color">
            <div class="title">
              <h3 class="texto-principal">Basico</h3>
            </div>

            <div class="price color-basico d-flex flex-row">
                <div class="col-sm tarjeta-paquete">
                  <img src="{{asset('images/280.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                </div>
                <div class="col-sm mes-paquete">
                  <p class="color-priceB animate__animated animate__heartBeat animate__infinite">/ Mes</p>
                </div> 
            </div>

            <ul class="feature-list">
              <li>1 Mb Subida</li>
              <li>5 Mb Bajada</li>
              <li>Instalación GRATIS</li>
              <li class="resticciones">* aplican restricciones</li>
              <hr class="hr-basico">
            </ul>
            <div class="action-button">
              <a href="" class="btn btn-main-rounded btn-priceB">Adquirir</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4  col-md-6">
          <div class="pricing-table featured text-center font-color">
            <div class="title">
              <h3 class="texto-principal">Ideal</h3>
            </div>

            <div class="price color-ideal d-flex flex-row">
              <div class="col-sm tarjeta-paquete">
                <img src="{{asset('images/320.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
              </div>
              <div class="col-sm mes-paquete">
                <p class="color-priceB animate__animated animate__heartBeat animate__infinite">/ Mes</p>
              </div> 
            </div>

            <ul class="feature-list">
              <li>A2 Mb Subida</li>
              <li>10 Mb Bajada</li>
              <li>Instalación GRATIS</li>
              <li class="resticciones">* aplican restricciones</li>
            </ul>
            <hr class="hr-ideal">
            <div class="action-button">
              <a href="" class="btn btn-main-rounded btn-priceI">Adquirir</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4  col-md-6">
          <div class="pricing-table text-center feature_item font-color">
            <div class="title">
              <h3 class="texto-principal">Plus</h3>
            </div>

            <div class="price color-plus d-flex flex-row">
              <div class="col-sm tarjeta-paquete">
                <img src="{{asset('images/360.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
              </div>
              <div class="col-sm mes-paquete">
                <p class="color-priceB animate__animated animate__heartBeat animate__infinite">/ Mes</p>
              </div> 
            </div>

            <ul class="feature-list">
              <li>5 Mb Subida</li>
              <li>15 Mb Bajada</li>
              <li>Instalación GRATIS</li>
              <li class="resticciones">* aplican restricciones</li>
            </ul>
            <hr class="hr-plus">
            <div class="action-button">
              <a href="" class="btn btn-main-rounded btn-priceP">Adquirir</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta mb-5">
    <div class="grid-wifi">
      <div class="img-wifi-respon">
        <img src="{{asset('images/wifi.png')}}" alt="Banner secundario" class="img-wifi">
      </div>
      <div class="mt-4">
        <h2 class="text-white style-text w900">¡Wifi en todos</h2>
        <h2 class="text-white style-text w900">tus dispositivos!</h2>
      </div>
    </div>
  </section> 

  <section class="m-informacion">
    <div class="d-flex justify-content-lg-center">
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion style-text w600">Aviso de privacidad/</a>
      </div>
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion style-text w600">Terminos y condiciones/</a>
      </div>
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion style-text w600">Cobertura/</a>
      </div>
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion style-text w600">Legales</a>
      </div>
    </div>
  </section>

@endsection