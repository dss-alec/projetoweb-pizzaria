<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover produto</title>
</head>
<body>
    <form action="{{ route('admin.produtos.destroy', $produto->id) }}" method="POST" class="inline">
    @csrf          
    @method('DELETE')

    <button type="submit" class="text-red-600 hover:text-red-900 ml-4" onclick="return confirm('Tem certeza que deseja excluir este produto?')">
        Excluir
    </button>
</form>
</body>
</html>
