@extends('admin/layouts/app')

@section('title', 'Fórum')

@section('header')
@include('admin/supports/partials/header')
@endsection

@section('content')

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($supports->items() as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ getStatusSupport($support->status) }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a href="{{ route('forum.show', $support->id) }}">Detalhes</a>
                    <a href="{{ route('forum.edit', $support->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<x-pagination :paginator="$supports" :appends="$filters"/>

@endsection