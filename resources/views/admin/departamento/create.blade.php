@extends('layouts.app')

@section('content')
    <div class="card mt-3" style="width: 600px; margin: 0 auto;">
        <div class="card-body">
            <h4 class="header-title mb-4 text-center">AGREGAR NUEVO DEPARTAMENTO</h4>

            <form action="{{ route('departamentos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">INGRESE EL NOMBRE DEL DEPARTAMENTO</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp"
                        placeholder="Ingrese el Nombre del Departamento">
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="piso">SELECCIONE EL PISO DEL DEPARTAMENTO</label>
                    <select name="piso" id="piso" class="form-control">
                        <option value="">--Seleccione un Piso--</option>
                        <option value="PLANTA BAJA">PLANTA BAJA</option>
                        <option value="UNO">UNO</option>
                        <option value="DOS">DOS</option>
                        <option value="TRES">TRES</option>
                        <option value="CUATRO">CUATRO</option>
                        <option value="CINCO">CINCO</option>
                        <option value="SEIS">SEIS</option>
                        <option value="SIETE">SIETE</option>
                        <option value="OCHO">OCHO</option>
                        <option value="NUEVE">NUEVE</option>
                        <option value="DIEZ">DIEZ</option>
                    </select>
                    @error('piso')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('departamentos.index') }}" class="btn btn-danger">Volver</a>
                    <input type="submit" class="btn btn-primary ml-2" value="Crear">
                </div>
            </form>
        </div>
    </div>
@endsection
