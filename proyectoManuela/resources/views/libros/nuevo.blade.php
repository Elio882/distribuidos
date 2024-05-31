<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nuevo    </title>
</head>
<body>
    <h1>Añada nuevos libros</h1>
    {{Form::open(['route'=>'libro.store','method'=>'post', 'id'=>'fLibro'])}}
        {{Form::label('titulo','Titulo:')}}
        {{Form::text('titulo','',['placeholder'=>'Introduzca el titulo', 'style'=>'background:orange'])}} <br>
        @error('titulo')
            <font color:"red" size:'25px' >{{$message}}</font> <br>
        @enderror
        {{Form::label('editorial','Editorial:')}}
        {{Form::text('editorial')}} <br>
        {{Form::label('anio','Año:')}}
        {{Form::number('anio', date('Y'), ['max'=>date('Y')])}} <br>
        {{Form::label('volumen','Volumen:')}}
        <select name="volumen" id="">
            <option value="1">Primero</option>
            <option value="2">Segunda</option>
            <option value="3">Tercero</option>
        </select> <br>
        {{Form::label('paginas','Paginas:')}}
        {{Form::number('paginas', '50')}} <br>
        {{Form::label('precio','Precio:')}}
        {{Form::text('precio', '0')}} <br>
        @error('precio')
            <font color:"red" size:'25px' >{{$message}}</font> <br>
        @enderror
        {{Form::label('cantidad','Cantidad:')}}
        {{Form::number('cantidad','100')}} <br>
        {{Form::label('fec_pblicacion','Fecha de publicación:')}}
        {{Form::date('fec_publicacion',date('Y-m-d'))}} <br>
        {{Form::label('categoria_id','Categorias:')}}
        <select name="categoria_id" id="categoria_id">
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
            @endforeach
        </select><br>
        {{Form::label('autor','Autor:')}}
        <select name="autor" id="">
            @foreach ( $autores as $autor )
                <option value="{{$autor->id}}">{{$autor->apellidos." ".$autor->nombres  }}</option>           
            @endforeach
        </select> <br>
        {{Form::submit('Guardar')}}
    {{Form::close()}}
</body>
</html>