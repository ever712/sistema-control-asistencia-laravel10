@extends('layouts.pasante-panel')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mb-0">

                <div class="card-body p-4">

                    <h4 class="header-title mt-0 mb-4 text-center">CAMBIAR CONTRASEÑA</h4>
                    <div class="account-box">

                        <div class="account-content">
                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-12">
                                        <div>
                                            <form method="post" action="{{ route('update.password') }}"
                                                class="form-horizontal">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label" for="example-password">INGRESA LA
                                                        NUEVA CONTRASEÑA
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input name="password" type="password" id="example-password"
                                                            class="form-control" value="">
                                                        @error('password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-end">
                                                    <a href="{{ route('perfil.pasante') }}" class="btn btn-danger">Volver</a>
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
