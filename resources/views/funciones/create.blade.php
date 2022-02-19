<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Crear función</title>
</head>
<body>
    
<a href="{{route('funciones.index')}}">Volver a las funciones</a>
    <h1>Crear funcion</h1>
    <form method="post" action="{{route('funciones.store')}}">

    @csrf
        <label>Pelicula</label>
        <input type="text" name="pelicula">
        <br/>
        <label>Fecha</label>
        <input type="text" name="fecha">
        <br/>
        <label>Hora</label>
        <input type="text" name="hora">
        <button type="submit">Guardar</button>
        <br/>
    </form>
</body>
</html>