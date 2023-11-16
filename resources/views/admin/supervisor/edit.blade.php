@extends('layouts.app')

@section('content')
    <div class="card mt-2" style="width: 600px; margin: 0 auto;">
        <div class="card-body">
            <h4 class="header-title mb-4 text-center">EDITAR SUPERVISOR</h4>

            <form action="{{ route('update.supervisores',$supervisor->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">INGRESAR EL NOMBRE DEL SUPERVISOR</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp" value="{{ $supervisor->nombre }}">
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="cargo">INGRESAR EL CARGO DEL SUPERVISOR</label>
                    <input name="cargo" type="text" class="form-control" id="cargo" aria-describedby="emailHelp" value="{{ $supervisor->cargo }}">
                    @error('cargo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="departamento_id">INGRESAR EL DEPARTAMENTO DEL SUPERVISOR</label>
                    <select name="departamento_id" id="departamento_id" class="form-control">
                        @foreach ($departamentos as $item)
                            <option value="{{ $item->id }}"
                              @if($item->id == $supervisor->departamento_id)
                                selected
                              @endif  
                            >{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                    @error('departamento_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('supervisores.index') }}" class="btn btn-danger">Volver</a>
                    <input type="submit" class="ml-2 btn btn-primary" value="Editar">
                </div>
            </form>
        </div>
    </div>
@endsection
