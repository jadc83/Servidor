<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="{{ route('encargados.store') }}" method="post">
        @csrf
        <label for="encargado">Nombre del proyecto</label>
        <input type="text" id="encargado" name="encargado">
        <button type="submit">Añadir</button>
    </form>

</body>
</html>
