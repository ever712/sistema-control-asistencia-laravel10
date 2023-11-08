@extends('layouts.app')

@section('content')
    <div class="card" style="width: 600px; margin: 0 auto;">
        <div class="card-body">
            <h4 class="header-title mb-4 text-center">AGREGAR NUEVO DEPARTAMENTO</h4>

            <form action="{{ route('departamentos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp"
                        placeholder="Ingrese el Nombre del Departamento">
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="piso">Piso</label>
                    <select name="piso" id="piso" class="form-control">
                        <option value="">--Seleccione una Piso--</option>
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
                <input type="submit" class="btn btn-primary" value="Crear">
            </form>
        </div>
    </div>
@endsection
