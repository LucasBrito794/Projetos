<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Cadastrar um novo produto</title>
</head>
<body>
    <form action="{{ route('registrar_produto') }}" method="POST">
    @csrf
    <label for="">Nome do Produto: </label><br>
    <input type="text" name="nome" Placeholder="Digite o nome" required><br>
    <label for="">Preço: </label><br>
    <input type="number" name="preco" Placeholder="Digite o preço" required><br>
    <label for="">Descrição: </label><br>
    <input type="text" name="descricao" Placeholder="Digite a descrição" required><br><br>
    <button>Salvar</button>
    
    </form>
</body>
</html>