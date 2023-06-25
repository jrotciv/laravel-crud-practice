<h1>Detalhes do tópico {{ $support->id }}</h1>

<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Status: {{ $support->status }}</li>
    <li>Descrição: {{ $support->body }}</li>
</ul>

<form action="{{ route('forum.destroy', $support->id) }}" method="post">
    @csrf()
    @method('delete')
    <button type="submit">Apagar</button>
</form>