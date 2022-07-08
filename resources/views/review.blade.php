@extends('layout')

@section('title')Отзывы@endsection

@section('main_content')
<h1>Форма добавления отзывов</h1>
<form method="post" action="/review/check">
    <input type="email" name="email" id="email" placeholder="Введите email"  class="form-control"><br>
    <input type="text" name="name" id="name" placeholder="Введите ваще имя"  class="form-control"><br>
    <textarea name="review" id="review" class="form-control" placeholder="Введите ваш отзыв"></textarea> <br>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection