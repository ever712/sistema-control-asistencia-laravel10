@extends('layouts.pasante-panel')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mb-0">

                <div class="card-body p-4">

                    <h4 class="header-title mt-0 mb-4 text-center">INFORMACION PERSONAL</h4>
                    <div class="account-box">
                        <div class="account-logo-box">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/users/' . $profile->image . '') }}" alt="user-image"
                                    class="rounded-circle">
                            </div>
                        </div>

                        <div class="account-content">
                            <div class="panel-body">
                                <hr />

                                <div class="text-center">
                                    <p class="text-muted font-13"><strong>NOMBRE COMPLETO: </strong><span
                                            class="">{{ $profile->nombre }}</span></p>


                                    <p class="text-muted font-13"><strong>EMAIL: </strong><span
                                            class="">{{ $profile->email }}</span></p>

                                    <p class="text-muted font-13"><strong>CI: </strong><span
                                            class="">{{ $profile->ci }}</span></p>
                                    <p class="text-muted font-13"><strong>DEPARTAMENTO: </strong><span
                                            class="">{{ $profile->departamento->nombre }}</span></p>
                                    <p class="text-muted font-13"><strong>SUPERVISOR: </strong><span
                                            class="">{{ $profile->supervisor->nombre }}</span></p>
                                    <p class="text-muted font-13"><strong>INSTITUCION: </strong><span
                                            class="">{{ $profile->institucion->nombre }}</span></p>
                                    @if($primerRegistro)
                                    <p class="text-muted font-13"><strong>INICIO DE PASANTIAS: </strong><span
                                            class="">{{  \Carbon\Carbon::parse($primerRegistro->ingreso)->format('d/m/Y') }}</span></p>
                                    {{-- HACER PRUEBAS ENVIANDO UN VALOR NULLO --}}
                                    @else
                                    <p class="text-muted font-13"><strong>INICIO DE PASANTIAS: </strong><span
                                            class="text-danger">Registre su primera Asistencia</span></p>
                                    @endif
                                    @if($countAsistencias)
                                    <p class="text-muted font-13"><strong>TOTAL ASISTENCIAS: </strong><span
                                            class="">{{ $countAsistencias }}</span></p>
                                    @else
                                    <p class="text-muted font-13"><strong>TOTAL ASISTENCIAS: </strong><span
                                            class="text-danger">Sin Asistencias</span></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('edit.password', $profile->id) }}" class="text-info">Cambiar Contraseña</a>
                            <a href="{{ route('edit-image.pasante') }}" class="text-success">Cambiar Imagen de Perfil</a>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end row -->
        @endsection
