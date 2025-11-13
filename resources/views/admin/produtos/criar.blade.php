<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar novo produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container" style="max-width: 1050px; margin-top: 6px;">
        <div class="card p-4 shadow-sm">
            <h2 class="text-center mb-3">Crie um novo produto</h2>
            
            <form action="{{ route('admin.produtos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do produto:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do produto" value="{{ old('nome') }}" required>
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição do produto:</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Digite uma breve descrição do produto">{{ old('descricao') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">Preço R$:</label>
                    <input type="number" class="form-control" id="preco" name="preco" placeholder="Digite o preço do produto" value="{{ old('preco') }}" step="0.01" min="0" required>
                </div>

                <div class="mb-3">
                    <label for="imagem" class="form-label">Escolha uma imagem</label>
                    <input type="file" class="form-control" id="imagem" name="imagem">@error('imagem') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <button type="submit" class="btn w-100" style="background-color: #9c1919; color: white; border: none;">Criar</button>
            </form>
            
        </div>
    </div>
</body>

</html>