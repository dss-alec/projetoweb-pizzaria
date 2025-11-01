
<div class="container">
    <h1>Nosso Cardápio</h1>
    <hr>

    <div class="row">
        
        @forelse ($produtos as $produto)
            <div class="col-md-4 mb-3">
                <div class="card">
                    {{-- <img src="..." class="card-img-top" alt="{{ $produto->nome }}"> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $produto->nome }}</h5>
                        <p class="card-text">{{ $produto->descricao }}</p>
                        <h6 class="card-subtitle mb-2 text-muted">
                            R$ {{ number_format($produto->preco, 2, ',', '.') }}
                        </h6>
                        {{-- (Botão "Adicionar ao Carrinho" ou "Saber Mais", etc.) --}}
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center">Nenhum produto disponível no momento.</p>
            </div>
        @endforelse

    </div>
</div>
