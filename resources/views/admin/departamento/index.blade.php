@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Módulo de Departamentos</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('departamentos.create')  }}" class="btn btn-success btn-rounded width-md waves-effect waves-light"
                    style="color:#ffffff;">Agregar
                    Nuevo</a>
                <div class="card-box">
                    <div class="table-responsive">

                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Piso</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departamentos as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->piso }}</td>
                                        <td class="d-flex">
                                            <a href="#"
                                                class="btn btn-primary btn-rounded width-md waves-effect waves-light mr-2"
                                                style="color:#ffffff;">Editar</a>
                                            <form action="#" method="post">
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

            </div>

        </div>
        <!--- end row -->

    </div> <!-- end container-fluid -->
@endsection
