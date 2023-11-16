@extends('layouts.app')
@section('css')
    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card-box table-responsive">

                <h2 class="text-center">Módulo Departamentos</h2>
                <a href="{{ route('departamentos.create') }}"
                    class="btn btn-success btn-rounded width-md waves-effect waves-light mb-3"
                    style="color:#ffffff;">Agregar
                    Nuevo</a>

                <table id="datatable" class="table table-bordered  dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Piso</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($departamentos as $item)
                            <tr>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->piso }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('departamentos.edit', $item) }}"
                                        class="btn btn-primary btn-rounded width-md waves-effect waves-light mr-2"
                                        style="color:#ffffff;">Editar</a>
                                    <form action="{{ route('departamentos.destroy', $item) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <input type="submit"
                                            class="btn btn-danger btn-rounded width-md waves-effect waves-light"
                                            value="Eliminar">
                                    </form>
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
