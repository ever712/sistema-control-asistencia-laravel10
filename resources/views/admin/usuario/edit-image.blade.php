@extends('layouts.app')

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h2 class="text-center">EDITAR USUARIO</h2>
                </div>
            </div>
        </div>
        <!-- end page title -->

    @section('content')
        <div class="row justify-content-center mt-3">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card mb-0">

                    <div class="card-body p-4">

                        <h4 class="header-title mt-0 mb-4 text-center">CAMBIAR IMAGEN DEL PERFIL</h4>
                        <div class="account-box">

                            <div class="account-content">
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <form method="post" action="{{ route('update-image.usuarios') }}"
                                                    class="form-horizontal" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <input name="image" type="file" id="example-fileinput"
                                                                class="form-control">

                                                            @error('image')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('profile') }}" class="btn btn-danger">Volver</a>
                                                <button type="submit" class="btn btn-primary ml-2">Cambiar
                                                </button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end row -->
    @endsection

</div> <!-- end container-fluid -->
@endsection
