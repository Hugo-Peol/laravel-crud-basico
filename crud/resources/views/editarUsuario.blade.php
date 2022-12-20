<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <form action="/editar/{{$usuario->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome: </label> <br>
        <input type="text" name="nome" placeholder="" value="{{$usuario->nome}}"> <br><br>
        <label for="">Telefone: </label><br>
        <input type="text" name="telefone" placeholder="" value="{{$usuario->telefone}}"> <br><br>
    
        <button type="submit"> Editar</button>



</body>
</html>