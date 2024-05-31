<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detalles</title>
</head>
<body>
   <h1>detalle del libro</h1>
   <h3>nombre: {{ $libro -> titulo }} </h3>
   <h3>Autores:</h3>
   <ul>
        @foreach($libro->autores as $autor)
            <li>{{ $autor->nombres }} {{ $autor->apellidos }}</li>  
        @endforeach
    </ul>
   <h3>Editorial: {{$libro -> editorial}}</h3>
   <h3>Precio: {{ $libro -> precio}}</h3>
   <h3>Paginas: {{ $libro -> paginas}}</h3>
   <h3>Volumen: {{ $libro -> volumen}}</h3>
   <h3>Fecha de Registro: {{ Carbon\Carbon::create($libro->created_at)->format('d/m/Y H:i') }}</h3>
   <h3>Fecha de Actualización: {{ Carbon\Carbon::create($libro->updated_at)->format('d/m/Y H:i') }}</h3>
</body>
</html>