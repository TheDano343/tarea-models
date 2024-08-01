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
            @foreach($products as $product)
            <tr>
                <th>{{$product->nombre}}</th>
                <th>{{$product->category->nombre}}</th>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>


</body>

</html>