<style>
    #toyota{
        color: red;
    }
</style>
<h1>Lista de los vehiculos registrados:</h1>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-light">
                <thead class="color text-light">
                <tr>
                    <th scope="col">Placa</th>
                    <th scope="col">Marca</th>

                </tr>
                </thead>
                <tbody>

                @foreach ($vehiculos as $vehiculo)
                    <tr>


                        @if($vehiculo->marca_id==1)
                            <td id="toyota"><strong> {{ $vehiculo->placa }}</strong> </td>
                            <td> Toyota  </td>
                        @elseif($vehiculo->marca_id==2)
                            <td> {{ $vehiculo->placa }} Los de Mazda son los mejores </td>
                            <td>  Mazda </td>
                        @else
                            <td> {{ $vehiculo->placa }} </td>
                            <td>  Chevrolet </td>
                        @endif


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>