<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    
    {{-- Link Padrão do Usuário Comum --}}
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>

    @if (Auth::user()->role === 'admin') 
        <x-nav-link :href="route('admin.cadastro.produtos')" :active="request()->routeIs('admin.cadastro.produtos')">
            {{ __('Cadastro de Produtos') }}
        </x-nav-link>
    @endif
    
</div>