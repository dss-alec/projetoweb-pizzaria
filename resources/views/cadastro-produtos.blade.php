<x-app-layout>
    {{-- Cabeçalho da Página --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    {{-- Botão para Adicionar (CORRIGIDO) --}}
                    <div class="mb-4">
                        <a href="{{ route('admin.produtos.criar') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                            Criar Produto
                        </a>
                        {{-- OS OUTROS BOTÕES FORAM REMOVIDOS DAQUI (eles pertencem à tabela) --}}
                    </div>

                    {{-- Tabela com a Lista --}}
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Preço</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            
                            {{-- Loop para mostrar os produtos --}}
                            @forelse ($produtos as $produto)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $produto->nome }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        
                                        {{-- Botão Editar (CORRIGIDO) --}}
                                        <a href="{{ route('admin.produtos.editar', $produto->id) }}" class="text-indigo-600 hover:text-indigo-900">
                                            Editar
                                        </a>
                                        
                                        {{-- Botão Excluir (CORRIGIDO) --}}
                                        <form action="{{ route('admin.produtos.remover', $produto->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4"
                                                    onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                                                Excluir
                                            </button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center text-gray-500">
                                        Nenhum produto cadastrado.
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>