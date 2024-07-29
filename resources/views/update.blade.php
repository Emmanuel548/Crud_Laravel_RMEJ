<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Esta la pagina donde se creara el formulario para dar de alta los carros</h1>
    <p><a href=" {{route('carss')}} ">Listado de carros</a></p>
    <form action="{{ route('updateCarros') }}" method="post">

        @csrf
        <input type="hidden" name="car_id" value="{{ $car->id }}">

        <input type="text" placeholder="Nombre del carro" name="name_carros" value="{{ $car->nombre }}">
        @error('name_carros')
        {{$message}}
        @enderror
        <select name="categoria_id" id="">
            @foreach ($categoria as $categorias)
                <option value="{{$categorias->id}}" @if ($categorias->id == $car->category_id) selected @endif>{{$categorias->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>