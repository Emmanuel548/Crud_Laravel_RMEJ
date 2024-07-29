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
    <form action="{{ route('createCarros') }}" method="post">
        @csrf


        <input type="text" placeholder="Nombre del carro" name="nombre">
        @error('nombre')
        {{$message}}
        @enderror
        <select name="category_id" id="">
            @foreach ($categoria as $categorias)
                <option value="{{$categorias->id}}">{{$categorias->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>