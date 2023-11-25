@extends('layouts.app')

@section('content')
    <div class="row mt-2">

        <div class="col-xl-4 col-sm-6">
            <div class="card-box widget-box-two widget-two-custom">
                <div class="media">
                    <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="fas fa-building avatar-title font-30 text-white"></i>
                    </div>

                    <div class="wigdet-two-content media-body">
                        <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Departamentos</p>
                        <h3 class="font-weight-medium my-2">Nro <span data-plugin="counterup">{{ $countDepartamento }}</span></h3>
                        <p class="m-0">Último registro: {{ $fechaFormateada }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-4 col-sm-6">
            <div class="card-box widget-box-two widget-two-custom">
                <div class="media">
                    <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="fas fa-user-tie avatar-title font-30 text-white"></i>
                    </div>

                    <div class="wigdet-two-content media-body">
                        <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Supervisores</p>
                        <h3 class="font-weight-medium my-2">Nro <span data-plugin="counterup">{{ $countSupervisor }}</span></h3>
                        <p class="m-0">Último registro: {{ $dateFormatSupervisor}}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-4 col-sm-6">
            <div class="card-box widget-box-two widget-two-custom">
                <div class="media">
                    <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="fas fa-school avatar-title font-30 text-white"></i>
                    </div>

                    <div class="wigdet-two-content media-body">
                        <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Instituciones</p>
                        <h3 class="font-weight-medium my-2">Nro <span data-plugin="counterup">{{ $countInstitucion }}</span></h3>
                        <p class="m-0">Último registro: {{ $dateFormatInstitucion }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-4 col-sm-6">
            <div class="card-box widget-box-two widget-two-custom">
                <div class="media">
                    <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="fas fa-users avatar-title font-30 text-white"></i>
                    </div>

                    <div class="wigdet-two-content media-body">
                        <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Pasantes</p>
                        <h3 class="font-weight-medium my-2">Nro <span data-plugin="counterup">{{ $countPasantes }}</span></h3>
                        <p class="m-0">Último registro: {{ $dateFormatPasantes }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->


        <div class="col-xl-4 col-sm-6">
            <div class="card-box widget-box-two widget-two-custom">
                <div class="media">
                    <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="far fa-sticky-note avatar-title font-30 text-white"></i>
                    </div>

                    <div class="wigdet-two-content media-body">
                        <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Asistencias</p>
                        <h3 class="font-weight-medium my-2">Nro <span data-plugin="counterup">{{ $countAsistencias }}</span></h3>
                        <p class="m-0">Último registro: {{ $dateFormatAsistencia }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
