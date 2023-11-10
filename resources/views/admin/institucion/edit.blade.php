@extends('layouts.app')

@section('content')
    <div class="card" style="width: 600px; margin: 0 auto;">
        <div class="card-body">
            <h4 class="header-title mb-4 text-center">EDITAR INSTITUCION</h4>

            <form action="{{ route('update.instituciones',$institucion->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">INGRESE EL NOMBRE DE LA INSTITUCION</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp" value="{{ $institucion->nombre }}">
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="direccion">INGRESE LA DIRECCION DE LA INSTITUCION</label>
                    <input name="direccion" type="text" class="form-control" id="direccion" aria-describedby="emailHelp" value="{{ $institucion->direccion }}">
                    @error('direccion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
             
                <input type="submit" class="btn btn-primary" value="Editar">
            </form>
        </div>
    </div>
@endsection
