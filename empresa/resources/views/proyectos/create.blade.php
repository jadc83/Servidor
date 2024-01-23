<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="{{ route('proyectos.store') }}" method="post">
        @csrf
        <label for="nombre">Nombre del proyecto</label>
        <input type="text" id="nombre" name="nombre">

        <label for="encargado_id">ID del encargado</label>
        <input type="text" id="encargado_id" name="encargado_id">

        <label for="tematica_id">ID de la Tematica</label>
        <input type="text" id="tematica_id" name="tematica_id">
        <button type="submit">Añadir</button>
    </form>

</body>
</html>
