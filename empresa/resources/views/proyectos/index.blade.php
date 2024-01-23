<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyectos</title>
</head>
<body>
    <table border="1" style="background-color: orange">
        <tr>
            <th>Tematica</th>
            <th>Proyecto</th>
            <th>Encargado</th>
            <th>Ver</th>
            <th>Edit</th>
            <th>Del</th>
        </tr>
        @foreach ($proyectos as $proyecto )
        <tr>
            <td>{{$proyecto->tematica->denominacion}}</td>
            <td>{{$proyecto->nombre}}
            <td>{{$proyecto->encargado->nombre}}
            <td><a href="{{ route('proyectos.show', $proyecto)}}"><button>Ver</button></a></td>
            <td>
                <form action="{{ route('proyectos.edit' , $proyecto)}}" method="get">
                    @csrf
                    <button type="submit">Edit</button>
                </form>
            </td>
            <td>
                <form action="{{ route('proyectos.destroy', $proyecto)}}" method="post">
                    @csrf
                    @method('Delete')
                    <button type="submit">Del</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('proyectos.create') }}">Add project</a>
</body>
</html>
