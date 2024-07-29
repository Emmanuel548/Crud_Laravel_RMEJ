<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Vista Creada en blade y llamada desde controlador.</h1>
    <p><a href=" {{route('carsCreate')}} ">Registrar nuevo carro</a></p>
    <h2>Listado de Carros: </h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CATEGORIA ID</th>
                <th>CREADO</th>
                <th>ESTADO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($carros as $car)
            <tr>
                <th>{{ $car->id }}</th>
                <th> <a href="{{ route('viewCars', $car->id ) }} ">{{ $car->nombre }}</a></th>
                <th>{{ $car->category_id }}</th>
                <th>{{ $car->created_at }}</th>
                <th>
                    @if ($car->active)
                    <span style="color: green">Activo</span>
                    @else
                    <span style="color: red">Inactivo</span>
                    @endif
                </th>
                <th>
                    <a href=" {{route('deleteCars', $car->id)}} ">Eliminar</a>
                </th>

            </tr>
            @empty
            <tr>
                <td colspan="4">Sin datos</td>
            </tr>
            @endforelse

        </tbody>
    </table>
</body>

</html>