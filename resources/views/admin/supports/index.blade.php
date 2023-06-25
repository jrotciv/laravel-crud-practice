<h1>Tópicos</h1>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a href="{{ route('forum.show', $support->id) }}">Detalhes</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



<a href="{{ route('forum.create')}}">Criar tópico</a>