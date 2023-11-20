@extends('layouts.pasante-panel')
@section('css')
    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container-fluid mt-3">
        {{-- {{ dd($asistenciaPasante) }} --}}
        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <form action="{{ route('buscar.asistencia') }}" method="post">
                      @csrf
                        <div class="form-group row">
                            <label class="col-md-1 col-form-label" for="example-date">Date</label>
                            <div class="col-md-2">
                                <input class="form-control" id="example-date" type="date" name="start">
                            </div>
                            <label class="col-md-1 col-form-label" for="example-date">Date</label>
                            <div class="col-md-2">
                                <input class="form-control" id="example-date" type="date" name="end">
                            </div>
                            <div class="col-md-2">
                                <button type="submit"
                                    class="btn btn-success waves-effect width-md waves-light">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-box table-responsive">

                    <h2 class="text-center">CONTROL DE ASISTENCIA</h2>
                    <div class="account-box">

                        <div class="account-content">
                            <div class="panel-body">
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <p class="text-muted font-13"><strong>NOMBRE COMPLETO: </strong><span
                                                class="">{{ Auth::guard('pasante')->user()->nombre }}</span></p>
                                        <p class="text-muted font-13"><strong>INSTITUCION: </strong><span
                                                class="">{{ Auth::guard('pasante')->user()->institucion->nombre }}
                                            </span></p>
                                        <p class="text-muted font-13"><strong>DEPARTAMENTO: </strong><span
                                                class="">{{ Auth::guard('pasante')->user()->departamento->nombre }}</span>
                                        </p>
                                        @if ($primerRegistro)
                                            <p class="text-muted font-13"><strong>FECHA DE INICIO: </strong><span
                                                    class="">{{ \Carbon\Carbon::parse($primerRegistro->ingreso)->format('d/m/Y') }}</span>
                                            </p>
                                            {{-- HACER PRUEBAS ENVIANDO UN VALOR NULLO --}}
                                        @else
                                            <p class="text-muted font-13"><strong>FECHA DE INICIO: </strong><span
                                                    class="text-danger">Registre su primera Asistencia</span></p>
                                        @endif
                                    </div>
                                    <div class="">

                                        <img src="{{ asset('assets/images/users/' . Auth::guard('pasante')->user()->image . '') }}"
                                            alt="user-image" class="rounded-circle">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="" class="table table-bordered  dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Ingreso</th>
                                <th>Salida</th>
                                <th class="col-5 text-truncate">Observaciones</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>

                    </table>
                </div>
            </div>
        </div> <!-- end row -->


    </div> <!-- end container-fluid -->
@endsection

@section('js')
    <!-- Required datatable js -->
    <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.colVis.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatables init -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
@endsection
