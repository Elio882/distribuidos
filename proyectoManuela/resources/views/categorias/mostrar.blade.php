<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
</head>
<body>
    <h1>el detalle de la categoria</h1>
    Nombre: {{$categoria->nombre}} <br>
    Fecha de registro: {{Carbon\Carbon::create($categoria->created_at)->format('d/m/Y H:i')}}<br>
    Fecha de actualizacion: {{Carbon\Carbon::create($categoria->update_at)->format('d/m/Y H:i')}}<br>
    <a href="{{route('categoria_index')}}">Volver</a><br>
    <!--
    <a href="localhost">volver2</a><br>
-->
    <a href="{{url('categorias')}}">vlover 3</a>
</body>
</html>