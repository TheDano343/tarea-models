<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Crear</h1>

<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <label>Titulo</label>
    <input type="text" name="title" placeholder="ingresa titulo">
    <label>Contenido</label>
    <input type="text" name="content" placeholder="ingresa titulo">

    <button type="submit">Crear</button>
</form>

</body>
</html>