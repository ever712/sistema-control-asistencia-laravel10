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

                        <h4 class="header-title mt-0 mb-4 text-center">INFORMACION PERSONAL</h4>
                        <div class="account-box">
                            <div class="account-logo-box">
                                <div class="text-center">
                                    <a href="index.html">
                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="user-image"
                                            class="rounded-circle">
                                    </a>
                                </div>
                            </div>

                            <div class="account-content">
                                <div class="panel-body">
                                    <hr />

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <form method="post" action="{{ route('update.usuarios') }}"
                                                    class="form-horizontal">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label class="col-md-4 col-form-label"
                                                            for="example-password">Cambiar
                                                            Contraseña</label>
                                                        <div class="col-md-8">
                                                            <input name="password" type="password" id="example-password"
                                                                class="form-control" value="">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <a href="{{ route('profile') }}" class="btn btn-primary">Volver</a>
                                                        <button type="submit" class="btn btn-success ml-2">Cambiar
                                                            Contraseña</button>
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
