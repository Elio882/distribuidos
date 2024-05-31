<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edtitar</title>
</head>
<body>
    <h1>Edicion de categoria</h1>
    {{ Form::open(['route'=>['categoria_actualizar','id'=>$categoria->id],'method'=>'post']) }}
        {{Form::label('nombre', 'Nombre:')}}
        {{ Form::text('nombre',$categoria->nombre,['placeholder'=>'introduzca la categoria','style'=>'color:red']
        )}} <!- siempre utilizar el valor del atributo que se dio en la BD -->
        {{ Form::submit('Enviar')}} {{Html::link(route('categoria_index'),'cancelarx')}}
    {{ Form::close() }}
</body>
</html>