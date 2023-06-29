@extends('admin/layouts/app')

@section('title', 'Novo tópico')

@section('header')
<h1>Novo tópico</h1>
@endsection

@section('content')

<form action="{{ route('forum.store') }}" method="post">
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @include('admin.supports.partials.form')
</form>
@endsection