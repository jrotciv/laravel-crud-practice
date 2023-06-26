<h1>Novo tópico</h1>

<x-alert/>

<form action="{{ route('forum.store') }}" method="post">
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @include('admin.supports.partials.form')
</form>