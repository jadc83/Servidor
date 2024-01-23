<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <form action="{{ route('proyectos.update', $proyecto) }}" method="post">
        @csrf
        @method("PUT")
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{$proyecto->nombre}}">
        <button type="submit">Aceptar</button>
    </form>
</body>
</html>
