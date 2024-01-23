<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyectos</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Encargado</th>
            <th>Ver</th>
            <th>Edit</th>
            <th>Del</th>
        </tr>
        @foreach ($encargados as $encargado )
        <tr>
            <td>{{$encargado->encargado}}</td>
            <td><a href="{{ route('encargados.show', $encargado)}}"><button>Ver</button></a></td>
            <td>
                <form action="{{ route('encargados.edit' , $encargado)}}" method="get">
                    @csrf
                    <button type="submit">Edit</button>
                </form>
            </td>
            <td>
                <form action="{{ route('encargados.destroy', $encargado)}}" method="post">
                    @csrf
                    @method('Delete')
                    <button type="submit">Del</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('encargados.create') }}">Añadir</a>
</body>
</html>
