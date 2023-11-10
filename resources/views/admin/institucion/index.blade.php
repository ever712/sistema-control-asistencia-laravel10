@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h2 class="text-center">Módulo Instituciones</h2>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('create.instituciones') }}"
                    class="btn btn-success btn-rounded width-md waves-effect waves-light mb-3" style="color:#ffffff;">Agregar
                    Nuevo</a>
                <div class="card-box">
                    <div class="table-responsive">

                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($instituciones as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->direccion }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('edit.instituciones', $item->id) }}"
                                                class="btn btn-primary btn-rounded width-md waves-effect waves-light mr-2"
                                                style="color:#ffffff;">Editar</a>
                                            <a href="{{ route('delete.instituciones', $item->id) }}"
                                                class="btn btn-danger btn-rounded width-md waves-effect waves-light mr-2"
                                                style="color:#ffffff;">Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
        <!--- end row -->

    </div> <!-- end container-fluid -->
@endsection
