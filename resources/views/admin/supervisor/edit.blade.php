@extends('layouts.app')

@section('content')
    <div class="card" style="width: 600px; margin: 0 auto;">
        <div class="card-body">
            <h4 class="header-title mb-4 text-center">EDITAR SUPERVISOR</h4>

            <form action="{{ route('update.supervisores',$supervisor->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp" value="{{ $supervisor->nombre }}">
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="cargo">Cargo</label>
                    <input name="cargo" type="text" class="form-control" id="cargo" aria-describedby="emailHelp" value="{{ $supervisor->cargo }}">
                    @error('cargo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="departamento_id">Departamento</label>
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
                <input type="submit" class="btn btn-primary" value="Editar">
            </form>
        </div>
    </div>
@endsection
