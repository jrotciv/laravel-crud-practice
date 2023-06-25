<h1>Editar tópico {{ $support->id }}</h1>

<form action="{{ route('forum.update', $support->id) }}" method="post">
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf()
    @method('put')
    <input type="text" name="subject" placeholder="Assunto" value="{{ $support->subject }}">
    <textarea name="body" cols="30" rows="10" placeholder="Descrição">{{ $support->body }}</textarea>
    <input type="submit" value="Enviar">
</form>