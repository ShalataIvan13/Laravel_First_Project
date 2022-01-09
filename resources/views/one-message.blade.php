@extends('layouts.app')

@section('title-block')
    <title>{{ $data->subject }}</title>
@endsection

@section('content')
    <h1>{{ $data->subject }}</h1>

    <div class="alert alert-info">
        <p>Сообщение: {{ $data->message }}</p>
        <p>Имя: {{ $data->name }}</p>
        <p>Email: {{ $data->email }}</p>
        <p>Дата написания: <small>{{ $data->created_at }}</small></p>
        <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
        <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
    </div>
@endsection