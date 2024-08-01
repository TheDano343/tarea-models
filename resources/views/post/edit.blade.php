<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Editar</h2>

   <form action="{{route('post.update',['post'=>$post])}}" method="post">
   @csrf
    @method('PUT')
    <input type="text" name="title" value="{{$post->title}}">

    <input type="text" name="title" value="{{$post->content}}">

    <button type="submit">Crear</button>

   </form>
</form>
</body>
</html>