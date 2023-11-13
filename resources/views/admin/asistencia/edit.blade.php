@extends('layouts.app')

@section('content')
    <div class="card" style="width: 600px; margin: 0 auto;">
        <div class="card-body">
            <h4 class="header-title mb-4 text-center">EDITAR ASISTENCIA</h4>

            <form action="{{ route('update.asistencias',$asistencia->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="observacion">OBSERVACION</label>
                    <input name="observacion" type="text" class="form-control" id="observacion" aria-describedby="emailHelp" value="{{ $asistencia->observacion }}">
                    @error('observacion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <input type="submit" class="btn btn-primary" value="Editar">
            </form>
        </div>
    </div>
@endsection
