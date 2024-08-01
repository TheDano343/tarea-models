<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Descripcion</th>
            </tr>
        </thead>

        <tbody>
            @foreach($posts as $post)
            <tr>
                <th>{{$post->title}}</th>
                <th>{{$post->content}}</th>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>


</body>

</html>