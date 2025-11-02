
<div class="container">
    <h2>Fale Conosco</h2>


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Opa!</strong> Verifique os campos abaixo:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('fale-conosco.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Seu Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Seu Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Seu Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone') }}" required>
        </div>

        <div class="mb-3">
            <label for="mensagem" class="form-label">Sua Mensagem:</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required>{{ old('mensagem') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
    </form>

</div>