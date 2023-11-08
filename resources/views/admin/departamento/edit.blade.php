@extends('layouts.app')

@section('content')
    <div class="card" style="width: 600px; margin: 0 auto;">
        <div class="card-body">
            <h4 class="header-title mb-4 text-center">EDITAR DEPARTAMENTO</h4>

            <form action="{{ route('departamentos.update',$departamento) }}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input value="{{ $departamento->nombre }}" name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp" >
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="piso">Piso</label>
                    <select name="piso" id="piso" class="form-control">
                        <option value="PLANTA BAJA" 
                          @if($departamento->piso == "PLANTA BAJA")
                            selected
                          @endif
                        >PLANTA BAJA</option>
                        <option value="UNO" 
                          @if($departamento->piso == "UNO")
                            selected
                          @endif
                        >UNO</option>
                        <option value="DOS" 
                          @if($departamento->piso == "DOS")
                            selected
                          @endif
                        >DOS</option>
                        <option value="TRES" 
                          @if($departamento->piso == "TRES")
                            selected
                          @endif
                        >TRES</option>
                        <option value="CUATRO" 
                          @if($departamento->piso == "CUATRO")
                            selected
                          @endif
                        >CUATRO</option>
                        <option value="CINCO" 
                          @if($departamento->piso == "CINCO")
                            selected
                          @endif
                        >CINCO</option>
                        <option value="SEIS" 
                          @if($departamento->piso == "SEIS")
                            selected
                          @endif
                        >SEIS</option>
                        <option value="SIETE" 
                          @if($departamento->piso == "SIETE")
                            selected
                          @endif
                        >SIETE</option>
                        <option value="OCHO" 
                          @if($departamento->piso == "OCHO")
                            selected
                          @endif
                        >OCHO</option>
                        <option value="NUEVE" 
                          @if($departamento->piso == "NUEVE")
                            selected
                          @endif
                        >NUEVE</option>
                        <option value="DIEZ" 
                          @if($departamento->piso == "DIEZ")
                            selected
                          @endif
                        >DIEZ</option>
                    </select>
                    @error('piso')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
@endsection
