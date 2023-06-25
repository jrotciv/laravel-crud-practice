<h1>Novo tópico</h1>

<form action="{{ route('forum.store') }}" method="post">
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf()
    <input type="text" name="subject" placeholder="Assunto">
    <textarea name="body" cols="30" rows="10" placeholder="Descrição"></textarea>
    <input type="submit" value="Enviar">
</form>