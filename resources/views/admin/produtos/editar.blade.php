<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container" style="max-width: 1050px; margin-top: 6px;">
        <div class="card p-4 shadow-sm">
            <h2 class="text-center mb-3">Edite os dados de um produto</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Opa!</strong> Algo deu errado:
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('admin.produtos.update', $produto->id) }}" method="POST" enctype="multipart/form-data">
                @csrf          
                @method('PUT')
                
                <div class="mb-3">
                    <label for="nome" class="form-label">Novo nome do produto:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}" required>
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Nova descrição do produto:</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ $produto->descricao }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">Novo preço R$:</label>
                    <input type="number" class="form-control" id="preco" name="preco" value="{{ $produto->preco }}" step="0.01" min="0" required>
                </div>

                @if ($produto->imagem)
                    <div class="mb-3">
                        <label class="form-label">Imagem Atual:</label><br>
                        <img src="{{ asset('storage/' . $produto->imagem) }}" alt="Imagem do Produto" class="img-thumbnail" style="max-width: 200px;">
                    </div>
                @else
                    <div class="mb-3">
                        <label class="form-label">Imagem Atual:</label>
                        <p>Nenhuma imagem cadastrada.</p>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="imagem" class="form-label">
                        Escolha uma NOVA imagem (deixe em branco para manter a atual)
                    </label>
                    <input type="file" class="form-control" id="imagem" name="imagem">
                    @error('imagem') 
                        <small class="text-danger">{{ $message }}</small> 
                    @enderror
                </div>
                <button type="submit" class="btn w-100" style="background-color: #9c1919; color: white; border: none;">
                    Salvar Alterações
                </button>
            </form>
            
        </div>
    </div>
</body>
</html>
