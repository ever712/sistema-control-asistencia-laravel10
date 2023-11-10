@extends('layouts.app')

@section('content')
    <div class="card" style="width: 600px; margin: 0 auto;">
        <div class="card-body">
            <h4 class="header-title mb-4 text-center">AGREGAR NUEVA INSTITUCION</h4>

            <form action="{{ route('store.instituciones') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">NOMBRE DE LA INSTITUCION</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp"
                        placeholder="INGRESE EN NOMBRE DE LA INSTITUCION">
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="direccion">DIRECCION DE LA INSTITUCION</label>
                    <input name="direccion" type="text" class="form-control" id="direccion" aria-describedby="emailHelp"
                        placeholder="INGRESE LA DIRECCION DE LA INSTITUCION">
                    @error('direccion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
             
                <input type="submit" class="btn btn-primary" value="Crear">
            </form>
        </div>
    </div>
@endsection
