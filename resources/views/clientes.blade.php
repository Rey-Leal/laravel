<!DOCTYPE html>
<html>

<head>
    <title>Clientes | Lista</title>
</head>

<body>
    <h2>Lista de Clientes</h2>
    <ul>
        <!-- Listagem de clientes -->
        @foreach($clientes as $cliente)
        <li><a href="{{$cliente->id}}">{{$cliente->nome}}</a></li>
        @endforeach
    </ul>
</body>

</html>