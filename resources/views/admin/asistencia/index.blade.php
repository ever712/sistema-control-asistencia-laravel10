@extends('layouts.app')

@section('css')
    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h2 class="text-center">Módulo Asistencias</h2>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">

                    <table id="datatable" class="table table-bordered  dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Pasante</th>
                                <th>Ingreso</th>
                                <th>Salida</th>
                                <th>Observación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($asistencias as $item)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($item->ingreso)->format('d-m-Y') }}</td>
                                    <td>{{ $item->pasante->nombre }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->ingreso)->format('H:i:s') }}</td>
                                    @if($item->salida !== null)
                                    <td>{{ \Carbon\Carbon::parse($item->salida)->format('H:i:s') }}</td>
                                    @else
                                    <td>No Registrado</td>
                                    @endif
                                    <td>{{ $item->observacion }}</td>
                                    <td>
                                        <a href="{{ route('edit.asistencias', $item->id) }}"
                                            class="btn btn-primary btn-rounded width-md waves-effect waves-light mr-2"
                                            style="color:#ffffff;">Editar</a>
                                    </td>
                                </tr>
                            @endforeach
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
