@extends('layouts.app')

@section('content')
    <div class="card" style="width: 600px; margin: 0 auto;">
        <div class="card-body">
            <h4 class="header-title mb-4 text-center">AGREGAR NUEVO SUPERVISOR</h4>

            <form action="{{ route('supervisores.store') }}" method="POST">
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
                    <label for="cargo">Cargo</label>
                    <input name="cargo" type="text" class="form-control" id="cargo" aria-describedby="emailHelp"
                        placeholder="Ingrese el Cargo del Supervisor">
                    @error('cargo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="departamento_id">Departamento</label>
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
                <input type="submit" class="btn btn-primary" value="Crear">
            </form>
        </div>
    </div>
@endsection
