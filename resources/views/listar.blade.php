<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Produtos</title>
</head>
<body>
<br>
<h1 class="text-center">Lista de Produtos</h1>
<hr>

<table class="table">

  <thead  class="table-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Descrição</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
        @foreach($produtos as $produto)
    <tr>
        <td>{{ $produto->nome }}</td>
        <td>{{ $produto->preco }}</td>
        <td>{{ $produto->descricao }}</td>
        <td><a href="/produto/editar/{{$produto->id}}" class="btn btn-warning">Editar</a></td>
        <td><a href="/produto/excluir/{{$produto->id}}" class="btn btn-danger">Excluir</a></td>
    </tr>



        @endforeach
  </tbody>
</table>
<a href="/produtos/novo" class="btn btn-success">Adicionar</a><br><br>
</body>
</html>