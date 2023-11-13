@extends('layouts.app')

@section('content')
    <div class="card" style="width: 600px; margin: 0 auto;">
        <div class="card-body">
            <h4 class="header-title mb-4 text-center">AGREGAR NUEVO PASANTE</h4>

            <form action="{{ route('store.pasantes') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp"
                        placeholder="Ingrese el Nombre del Pasante">
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="text" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Ingrese el correo del Pasante">
                    @error('email')
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

                <div class="form-group">
                    <label for="supervisor_id">Supervisor</label>
                    <select name="supervisor_id" id="supervisor_id" class="form-control">
                        <option value="">--Seleccione un Supervisor--</option>
                        @foreach ($supervisores as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                    @error('supervisor_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="institucion_id">Institución</label>
                    <select name="institucion_id" id="institucion_id" class="form-control">
                        <option value="">--Seleccione la institución--</option>
                        @foreach ($instituciones as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                    @error('institucion_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <input type="submit" class="btn btn-primary" value="Crear">
            </form>
        </div>
    </div>
@endsection
