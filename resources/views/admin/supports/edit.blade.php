<h1>Editar tópico {{ $support->id }}</h1>

<x-alert/>

<form action="{{ route('forum.update', $support->id) }}" method="post">
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @method('put')
    @include('admin.supports.partials.form', [
        'support'=> $support
    ])
</form>