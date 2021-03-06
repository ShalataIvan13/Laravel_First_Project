@extends('layouts.app')

@section('title-block')
    <title>Обновление записи</title>
@endsection

@section('content')
    <h1>Обновление записи</h1>

    

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf  <!-- ключ безопасности, для того, чтобы laravel понимал что форма отправлена коректнно (всегда неопходимо добавлять к формам) -->

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="name">Введите email</label>
            <input type="text" name="email" value="{{$data->email}}" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" value="{{$data->subject}}" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение">{{$data->message}}</textarea>
        </div>

        <button type="submit" class="btn btn-success mt-3">Обновить</button>
    </form>
@endsection

