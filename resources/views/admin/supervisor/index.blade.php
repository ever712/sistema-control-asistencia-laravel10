@extends('layouts.app')
@section('css')
    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container-fluid">

  <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">

                    <h2 class="text-center">MODULO DE SUPERVISORES</h2>
                    <a href="{{ route('supervisores.create') }}"
                        class="btn btn-success btn-rounded width-md waves-effect waves-light mb-3"
                        style="color:#ffffff;">Agregar
                        Nuevo</a>

                    <table id="datatable" class="table table-bordered  dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                            <tr>
                                    <th>Nombre</th>
                                    <th>Cargo</th>
                                    <th>Departamento</th>
                                    <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                                @foreach ($supervisores as $item)
                                    <tr>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->cargo }}</td>
                                        <td>{{ $item->departamento->nombre }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('edit.supervisores', $item->id) }}"
                                                class="btn btn-primary btn-rounded width-md waves-effect waves-light mr-2"
                                                style="color:#ffffff;">Editar</a>
                                            <a href="{{ route('delete.supervisores', $item->id) }}"
                                                class="btn btn-danger btn-rounded width-md waves-effect waves-light mr-2"
                                                style="color:#ffffff;">Eliminar</a>
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