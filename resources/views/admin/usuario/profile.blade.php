@extends('layouts.app')

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
                                        <p class="text-muted font-13"><strong>NOMBRE COMPLETO</strong><br><br> <span
                                                class="">{{ $profile->name }}</span></p>


                                        <p class="text-muted font-13"><strong>EMAIL</strong><br><br> <span
                                                class="">{{ $profile->email }}</span></p>

                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('edit.usuarios', $profile->id) }}" class="text-info">Cambiar Contraseña</a>
                                <a href="{{ route('edit-image.usuarios', $profile->id) }}" class="text-success">Cambiar Imagen de Perfil</a>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end row -->
            @endsection
