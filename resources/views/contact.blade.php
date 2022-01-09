@extends('layouts.app')

@section('title-block')
    <title>Страница контактов</title>
@endsection

@section('content')
    <h1>Страница контактов</h1>

    

    <form action="{{ route('contact-form') }}" method="post">
        @csrf  <!-- ключ безопасности, для того, чтобы laravel понимал что форма отправлена коректнно (всегда неопходимо добавлять к формам) -->

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="name">Введите email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
        </div>

        <button type="submit" class="btn btn-success mt-3">Отправить</button>
    </form>
@endsection

