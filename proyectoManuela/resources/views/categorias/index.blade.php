<?php $i = 0 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de categorias</title>
</head>
<body>
    <h3>mi primera chamba en laravel</h3>
    <table border="1" width = "80%" align = "center">
        <thead>
            <tr>
                <th>Nro.</th>
                <th>Categoria</th>
                <th>Fecha</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td> {{++$i}} </td>
                    <td>{{$categoria->nombre}}</td>
                    <td> 
                        {{Carbon\Carbon::create($categoria->created_at)->format('d/m/Y H:i')}} 
                    </td>
                    <td> 
                        <a href="{{route('categoria_mostrar',['id'=>$categoria->id])}}">Detalles</a>
                        {{Html::link(route('categoria_editar',['id'=>$categoria->id]),'editar2')}}
                        Eliminar
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</body>
</html>