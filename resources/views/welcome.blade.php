<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | Adminox - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100">


    <div class="account-pages w-100 mt-5 mb-5">

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mb-0">

                        @if (\Session::has('create'))
                            <div class="text-center alert alert-success">
                                <p>!!{{ \Session::get('create') }}!!</p>
                            </div>
                        @endif
                        @if (\Session::has('update'))
                            <div class="text-center alert alert-success">
                                <p>!!{{ \Session::get('update') }}!!</p>
                            </div>
                        @endif
                        @if (\Session::has('error'))
                            <div class="text-center alert alert-danger">
                                <p>!!{{ \Session::get('error') }}!!</p>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a class="nav-link" href="{{ route('view.login') }}"><b>INGRESAR</b></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">

                            <div class="account-box">
                                <div class="account-logo-box">
                                    <div class="text-center">
                                        <a href="index.html">
                                            <img src="assets/images/logo-dark.png" alt="" height="30">
                                        </a>
                                    </div>
                                    <h5 class="text-uppercase mb-1 mt-4 text-center">!!!BIENVENIDOS!!!</h5>
                                    <p class="mb-0 text-center">Registre su asistencia en el <b>AsisWeb</b></p>
                                </div>

                                <div class="account-content mt-4">

                                    <form method="POST" action="{{ route('ingreso.asistencias') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <div class="text-center col-12">
                                                <label for="ci">INGRESE SU NUMERO DE CARNET</label>

                                                <input id="ci" type="text" class=" text-center form-control"
                                                    name="ci" placeholder="9944023" autofocus>
                                                @error('ci')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <br>
                                                <label for="observacion">¿TIENE ALGUNA OBSERVACION? (Opcional)</label>
                                                <div class="col-md-12">
                                                    <textarea style="resize: none" class="form-control" rows="2" id="observacion" name="observacion"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <button
                                                    class="btn btn-md btn-block btn-primary waves-effect waves-light"
                                                    type="submit">REGISTRAR ASISTENCIA
                                                </button>
                                            </div>
                                        </div>

                                    </form>


                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
