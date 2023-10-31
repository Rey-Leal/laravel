<!DOCTYPE html>
<html>

<head>
    <title>Cliente | Single</title>
</head>

<body>
    <h2>Cliente Selecionado</h2>
    <p>Nome: {{$nome}}</p>
    <p>Sobrenome: {{$sobrenome}}</p>
    <p>Cadastro: {{$dataCadastro}}</p>
    <p>Sexo: {{$sexo}}</p>

    <form method="post">
        <!-- csrf_field() = Token hidden de seguranca do Laravel -->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$id}}">
        <input type="submit" value="Deletar">
    </form>
</body>

</html>