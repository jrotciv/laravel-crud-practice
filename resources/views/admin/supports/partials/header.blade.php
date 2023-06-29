<div>
    <div class="flex items-center gap-x-3">
        <h1 class="text-1g tex-black-500">Fórum</h1>

        <span>{{ $supports->total()}}</span>

        <div>
            <a href="{{ route('forum.create')}}">Criar tópico</a>
        </div>
    </div>
</div>