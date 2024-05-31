<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    
    hola mundo

    {{ Form::open(['route'=>['libro.actualizar', 'id'=>$libro->id], 'method'=>'post']) }}
		{{ Form::label('titulo', 'Titulo:') }}
		{{ Form::text('titulo', $libro->titulo, ['placeholder'=>'Introduzca el titulo', 'style'=>'color:red']) }}<br>
        {{ Form::label('editorial', 'Editorial:') }}
        {{ Form::text('editorial', $libro->editorial, ['placeholder'=>'Introduzca el titulo', 'style'=>'color:red']) }}<br>
        {{ Form::label('precio', 'Precio:') }}
        {{ Form::text('precio', $libro->precio, ['placeholder'=>'Introduzca el precio', 'style'=>'color:red']) }}<br>
        {{ Form::label('volumen', 'Volumen:') }}
        {{ Form::text('volumen', $libro->volumen, ['placeholder'=>'Introduzca el voliumen', 'style'=>'color:red']) }}<br>
        {{ Form::label('paginas', 'Paginas:') }}
        {{ Form::text('paginas', $libro->paginas, ['placeholder'=>'Introduzca el precio', 'style'=>'color:red']) }}<br>
		{{ Form::submit('Actualizar') }} {{ Html::link(route('libro.index'), 'Cancelar') }}
		
	{{ Form::close() }}
</body>
</html>