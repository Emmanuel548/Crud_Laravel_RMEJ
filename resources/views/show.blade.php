<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($categoryCars)
        <h1>Bienvenido a la pagina del carro: {{ $nameCars }} que pertenece a la categoria: {{ $categoryCars }}</h1>
    @else
    <h1>Bienvenido a la pagina del carro: {{ $nameCars }}</h1>
    @endif
    
    <h2>{{ $fecha }}</h2>
</body>
</html>