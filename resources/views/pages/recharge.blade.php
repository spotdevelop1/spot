@extends('layouts.index')

@section('content')
@push('styles')
<link href="{{ asset('css/newstyles.css') }}" rel="stylesheet">
@endpush


<section class="pricing bg-shape mt-0">
    <div class="container-fluid bg-secondary booking mb-1 mt-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 pt-5 ">
                    <div class="py-5 mt-recarga">
                        <h1 class="text-white color-tl mb-2 text-center display-4 style-text w900" style="background-color: yellow;font-size: 2.5rem;">¡CONSULTA TÚ SALDO!</h1>
                        <h1 class="text-white color-tl mb-4 text-center display-4 style-text w900" style="font-size: 3rem;">Es fácil y seguro</h1>
                    </div>
                </div>
                <div class="custom-col-lg-7">
                <div class="color-pg-recarga form-user-recharge mt-5 p-5">
    <h3 class="text-white mb-4 text-ingre style-text w600 text-uppercase">¡Coloca tus datos!</h3>
    <!-- Contenedor de la animación de carga -->
    <div class="dots-container">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>

    <!-- Mensaje de error general -->
    @if(session('errorId'))
    <div class="alert alert-danger text-center">
        {{ session('errorId') }}
    </div>
    @endif
    <!-- Formulario para buscar por ID de servicio -->
    <form action="{{ url('/buscar-por-id') }}" method="POST" class="mb-3">
        @csrf
        <div class="form-group mb-2">
            <input type="text" class="form-user-control" id="id_servicio" name="id_servicio" placeholder="Ingrese ID de Servicio" maxlength="15">
            @error('id_servicio')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn">Buscar por ID</button>
    </form>
</div>



                    <div class="custom-col-lg-7">
                        <div class="color-pg-recarga form-user-recharge mt-5 p-5">
                            <h3 class="text-white mb-4 text-ingre style-text w600 text-uppercase">¡Coloca tus datos!</h3>
                            
                            <!-- Mensaje de éxito -->
                            @if(session('success'))
                            <div class="alert alert-success text-center">
                                {{ session('success') }}
                            </div>
                            @endif

                            <!-- Mensaje de error general -->
                            @if(session('errorNombreTelefono'))
                            <div class="alert alert-danger text-center">
                                {{ session('errorNombreTelefono') }}
                            </div>
                            @endif

                            <!-- Formulario para buscar por Nombre y Teléfono -->
                            <form action="{{ url('/buscar-por-nombre-telefono') }}" method="POST">
                                @csrf
                                <div class="form-group mb-2">
                                    <input type="text" class="form-user-control" id="nombre" name="nombre" placeholder="Ingrese su Nombre" maxlength="70">
                                    @error('nombre')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-user-control" id="telefono" name="telefono" placeholder="Ingrese su Teléfono" maxlength="15">
                                    @error('telefono')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn">Buscar por Nombre y Teléfono</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<section>
    <div> {{-- class="container"  --}}
        <div class="row">
            <div class="col color-apart p-3">
                <h3 class="text-white mb-3 text-center p-3 style-text w400">¿Aún no eres parte de <spa class="style-text w800">SpotUno</spa>?</h3>
                <h5 class="text-white text-center style-text w400">¿Qué esperas? adquiérelo y disfruta de todos los beneficios</h5>
                <div class="col text-center p-3">
                    <button type="button" class="btn btn-outline-secondary btn-border style-text w400">¡Solicítalo ya!</button>
                </div>
            </div>
            <div class="col color-paquet p-3">
                <h3 class="text-white mb-3 text-center p-3 style-text w400">Disfruta de todo <span class="style-text w800">nuestros paquetes</span></h3>
                <h5 class="text-white text-center style-text w400">Queremos ofrecerte solo lo mejor, seleccina, compra y disfruta</h5>
                <div class="col text-center p-3">
                    <button type="button" class="btn btn-outline-secondary btn-border style-text w400">Ver paquetes</button>
                </div>
            </div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
    // Al enviar el formulario
    $('#id_servicio').closest('form').submit(function() {
        // Muestra el contenedor de la animación
        $('.dots-container').css('display', 'flex'); // Usa 'flex' para mantener el diseño del centro
    });
});
</script>




<script>
    $('#numeroTelefono').inputmask("(999) 999-9999");
</script>

<script>
    $('#formRecargar').click(function() {

        var numeroTelefono = $('#numeroTelefono').val();
        var numeroSinParentesis = numeroTelefono.replace(/\((\w+)\)/g, "$1");
        var numeroSinGuion = numeroSinParentesis.replace("-", " ")
        var numeroSinEspacio = numeroSinGuion.replace(/\s+/g, '');

        var tipoServicio = $('#tipoServicio').val();
        var montoRecarga = $('#montoRecarga').val();

        if (numeroSinEspacio == "") {
            return Swal.fire({
                icon: 'error',
                title: 'El número de Teléfono es obligatorio.',
                showConfirmButton: false,
                timer: 2000
            });
        } else if (tipoServicio == null) {
            return Swal.fire({
                icon: 'error',
                title: 'Seleccione un Servicio.',
                showConfirmButton: false,
                timer: 2000
            });
        } else if (montoRecarga == null) {
            return Swal.fire({
                icon: 'error',
                title: 'Seleccione un Monto a Recargar.',
                showConfirmButton: false,
                timer: 2000
            });
        } else {
            $('#tipoServicioInput').val(tipoServicio);
            $('#montoRecargaInput').val(montoRecarga);

            Swal.fire({
                title: '¿La recarga seleccionada con número ' + numeroSinEspacio + ' es correcto?',
                showCancelButton: true,
                confirmButtonText: 'SI, ES CORRECTO',
                confirmButtonColor: '#0a4f97',
            }).then((result) => {

                if (result.isConfirmed) {
                    $('#formPago').submit();
                } else {
                    Swal.fire({
                        icon: 'info',
                        title: 'Operación Cancelada',
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            });
        }
    });
</script>

@endsection