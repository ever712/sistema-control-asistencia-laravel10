<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control de Asistencia</title>

    <!-- Agregamos Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Agregamos estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card-box {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        .account-box {
            margin-top: 20px;
        }

        .account-content {
            padding: 20px;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="card-box">

        <h2 class="text-center">CONTROL DE ASISTENCIA</h2>
        <div class="account-box">

            <div class="account-content">
                <div class="panel-body">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <p class="text-muted font-13"><strong>NOMBRE COMPLETO: </strong><span
                                    class="">{{ Auth::guard('pasante')->user()->nombre }}</span></p>
                            <p class="text-muted font-13"><strong>INSTITUCION: </strong><span
                                    class="">{{ Auth::guard('pasante')->user()->institucion->nombre }}
                                </span></p>
                            <p class="text-muted font-13"><strong>DEPARTAMENTO: </strong><span
                                    class="">{{ Auth::guard('pasante')->user()->departamento->nombre }}</span>
                            </p>
                            @if ($primerRegistro)
                                <p class="text-muted font-13"><strong>FECHA DE INICIO: </strong><span
                                        class="">{{ \Carbon\Carbon::parse($primerRegistro->ingreso)->format('d/m/Y') }}</span>
                                </p>
                            @else
                                <p class="text-muted font-13"><strong>FECHA DE INICIO: </strong><span
                                        class="text-danger">Registre su primera Asistencia</span></p>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Ingreso</th>
                    <th>Salida</th>
                    <th class="col-4 text-truncate">Observaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asistenciaPasante as $item)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($item->ingreso)->format('d-m-Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->ingreso)->format('H:i:s') }}</td>
                        @if ($item->salida !== null)
                            <td>{{ \Carbon\Carbon::parse($item->salida)->format('H:i:s') }}</td>
                        @else
                            <td>No Registrado</td>
                        @endif
                        <td>{{ $item->observacion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-right mt-4">
            <div style="border-bottom: 1px solid #333; width: 150px; margin: 0 auto;"></div>
            <p class="text-center mb-0 mt-0">{{ $pasante->supervisor->cargo }}</p>
            <p class="text-center">{{ $pasante->supervisor->nombre }}</p>
        </div>
    </div>

    <!-- Agregamos jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
