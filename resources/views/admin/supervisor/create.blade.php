@extends('layouts.app')

@section('content')
    <div class="card mt-2" style="width: 600px; margin: 0 auto;">
        <div class="card-body">
            <h4 class="header-title mb-4 text-center">AGREGAR NUEVO SUPERVISOR</h4>

            <form action="{{ route('supervisores.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">INGRESAR EL NOMBRE DEL SUPERVISOR</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp"
                        placeholder="Ingrese el Nombre del Departamento">
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="cargo">INGRESAR EL CARGO DEL SUPERVISOR</label>
                    <input name="cargo" type="text" class="form-control" id="cargo" aria-describedby="emailHelp"
                        placeholder="Ingrese el Cargo del Supervisor">
                    @error('cargo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="departamento_id">SELECCIONE EL DEPARTAMENTO DEL SUPERVISOR</label>
                    <select name="departamento_id" id="departamento_id" class="form-control">
                        <option value="">--Seleccione un Departamento--</option>
                        @foreach ($departamentos as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                    @error('departamento_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('supervisores.index') }}" class="btn btn-danger">Volver</a>
                    <input type="submit" class="ml-2 btn btn-primary" value="Crear">
                </div>
            </form>
        </div>
    </div>
@endsection
