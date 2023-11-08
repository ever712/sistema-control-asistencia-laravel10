@extends('layouts.app')

@section('content')
    <div class="card" style="width: 600px; margin: 0 auto;">
        <div class="card-body">
            <h4 class="header-title mb-4 text-center">AGREGAR NUEVO DEPARTAMENTO</h4>

            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Ingrese el Nombre del Departamento">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Piso</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el Piso del Departamento">
                </div>
                <input type="submit" class="btn btn-primary" value="Crear">
            </form>
        </div>
    </div>
@endsection
