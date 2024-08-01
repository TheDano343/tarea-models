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
            @foreach($users as $user)
            <tr>
                <th>{{$user->name}}</th>
                <th>{{$user->email}}</th>

            </tr>
            @endforeach
        </tbody>
    </table>
    </div>


</body>

</html>