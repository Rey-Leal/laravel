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

    <form method="post">
        <!-- csrf_field() = Token hidden de seguranca do Laravel -->
        {{csrf_field()}}
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="sobrenome" placeholder="Sobrenome">
        <input type="text" name="sexo" placeholder="Sexo">
        <input type="submit" value="Inserir">
    </form>
</body>

</html>