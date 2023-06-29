@extends('admin/layouts/app')

@section('title', 'Editar tópico')

@section('header')
<h1>Editar tópico {{ $support->id }}</h1>
@endsection

@section('content')

<form action="{{ route('forum.update', $support->id) }}" method="post">
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @method('put')
    @include('admin.supports.partials.form', [
        'support'=> $support
    ])
</form>
@endsection