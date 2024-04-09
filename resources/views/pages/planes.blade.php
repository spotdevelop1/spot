@extends('layouts.index')
@section('content')

  <section class="pricing  bg-shape" id="pricing">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title mb-4">
            <h2 class="mb-3 style-text w900">Los mejores <span>planes</span> que tenemos para ti</h2>
            <p class="style-text w800">Ven y descubre las mejores promociones, precios y planes.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
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
              <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB">Adquirir</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
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

            {{--  <div class="price">
              <p class="animate__animated animate__heartBeat animate__infinite">$320<span>/ Mes</span></p>
            </div>  --}}
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

        <div class="col-lg-4 col-md-6 m-md-auto">
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

            {{--  <div class="price">
              <p class="color-priceP animate__animated animate__heartBeat animate__infinite">$360<span>/ Mes</span></p>
            </div>  --}}
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

      {{--  <div class="row">
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <div class="pricing-table text-center feature_item font-color">
                <div class="title">
                  <h3 class="texto-principal">Basico</h3>
                </div>
  
                <div class="price color-basico d-flex flex-row">
                    <div class="col-sm" style="margin-left: 6rem!important; margin-bottom: -1rem;">
                      <img src="{{asset('images/280.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                    </div>
                    <div class="col-sm" style="margin-top: 2.5rem; margin-left: -13rem; margin-bottom: -1rem;">
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
  
            <div class="item">
              <div class="pricing-table featured text-center font-color">
                <div class="title">
                  <h3 class="texto-principal">Ideal</h3>
                </div>
  
                <div class="price color-ideal d-flex flex-row">
                  <div class="col-sm" style="margin-left: 6rem!important; margin-bottom: -1rem;">
                    <img src="{{asset('images/320.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                  </div>
                  <div class="col-sm" style="margin-top: 2.5rem; margin-left: -13rem; margin-bottom: -1rem;">
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
  
            <div class="item">
              <div class="pricing-table text-center feature_item font-color">
                <div class="title">
                  <h3 class="texto-principal">Plus</h3>
                </div>
  
                <div class="price color-plus d-flex flex-row">
                  <div class="col-sm" style="margin-left: 6rem!important; margin-bottom: -1rem;">
                    <img src="{{asset('images/360.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                  </div>
                  <div class="col-sm" style="margin-top: 2.5rem; margin-left: -13rem; margin-bottom: -1rem;">
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
      </div>  --}}

    </div>
  </section> 

@endsection