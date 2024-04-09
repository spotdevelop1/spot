@extends('layouts.index')

@section('content')
@push('styles')
<link href="{{ asset('css/newstyles.css') }}" rel="stylesheet">
@endpush

<section class="user-info-section pago pricing bg-shape mt-0">
    <div class="container mt-5">
        <div class="custom-col-lg-7 mb-4">
            <div class="color-pg-recarga">
                @if($servicio)
                <table class="table custom-table">
                    <thead>
                        <tr>
                            <th scope="col">Datos</th>
                            <th scope="col">Información</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID de Servicio</td>
                            <td>{{ $servicio->id_servicio }}</td>
                        </tr>
                        <tr>
                            <td>Nombre</td>
                            <td>{{ \App\Helpers\CensorHelper::censurarNombre($servicio->nombre) }}</td>
                        </tr>
                        <tr>
                            <td>Teléfono</td>
                            <td>{{ \App\Helpers\CensorHelper::censurarTelefono($servicio->telefono) }}</td>
                        </tr>
                        <tr>
                            <td>Saldo</td>
                            <td>{{ $servicio->saldo }}</td>
                        </tr>
                    </tbody>
                </table>
                @endif

                <!-- Mantener el botón de redireccionamiento existente -->
                @if(isset($servicio->url_pago))
                <a href="{{ $servicio->url_pago }}" class="btn btn-success btn-pagar-ahora" target="_blank">Consulta</a>
                @endif
                
                <!-- Nuevo botón para iniciar el flujo de redireccionamiento con Openpay -->
                <form action="{{ route('create.charge') }}" method="POST">
                    @csrf
                    <input type="hidden" name="servicio_id" value="{{ $servicio->id_servicio }}">
                    <button type="submit" class="btn btn-primary">Iniciar Pago con Openpay</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
