<?php $i=0 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo</h1>
    <table>
        <thead>
            <tr>
                <th>N°</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$libro->titulo}}</td>
                <td>
                @foreach($libro->autores as $autor)
                    {{ $autor->nombres ." ".$autor->apellidos }},<br> 
                @endforeach
                </td>
                <td>{{$libro->precio}}</td>
                <td>
				<a href="{{ route('libro.detalles', ['id'=>$libro->id]) }}">Detalles</a> |
				{{ Html::link(route('libro.editar', ['id'=>$libro->id]), 'Editar') }}
                    eliminar
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{Html::link(route('libro.create'),'Añadir nuevo libro')}}
</body>
</html>