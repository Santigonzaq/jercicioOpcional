<h1>Formulario de registro de Persona y vehiculo</h1>

<div>
    <form action={{route("registro_datos")}} method="POST">
        <div class="borde">
            <div class="form-group">
                <label for="name" class="py-2 text-light">Nombre Dueño</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">

            </div>
            <div class="form-group">
                <label for="cedula" class="py-2 text-light">Cedula dueño</label>
                <input type="number" name="cedula" value="{{ old('cedula') }}" class="form-control">


            </div>
            <div class="borde">
                <div class="form-group">
                    <label for="nit" class="py-2 text-light">Placa del vehiculo</label>
                    <input type="text" name="placa" value="{{ old('placa') }}" class="form-control">


                </div>

            </div>
            <div class="form-group">
                <label for="marca" class="text-light">Marca vehiculo</label>
                <select  name="marca" value="{{ old('marca') }}" class="form-control">
                    @foreach($marcas as $marca)
                        <option value="{{$marca->id}}">{{$marca->nombre}}
                        </option>
                    @endforeach

                </select>
                @if ($errors->has('marca'))
                    <p class="text-danger">{{ $errors->first('marca') }}</p>
                @endif
            </div>

            <br>
            <p class="text-light">* Campos obligatorios</p>
            @csrf
        </div>
        <br>
        <button id="btn-formulario" type="submit" class="btn btn-subir text-light font-weight-bold">Registrar datos</button>
    </form>

