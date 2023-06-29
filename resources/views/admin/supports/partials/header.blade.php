<header class="sm:flex sm:items-center sm:justify-space">
    <div class="flex items-center gap-x-3">
        <h1 class="text-1g tex-black-500">Fórum</h1>

        <span>{{ $supports->total()}}</span>

        <div>
            <a href="{{ route('forum.create')}}">Criar tópico</a>
        </div>

        <form action="{{ route('forum.index') }}" method="get">
            <input name="filter" placeholder="Procurar" value="{{ $filters['filter'] ?? ''}} ">
        </form>
    </div>
</header>