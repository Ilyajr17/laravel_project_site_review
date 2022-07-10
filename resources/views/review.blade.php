@extends('layout')

@section('title')Отзывы@endsection

@section('main_content')
<h1>Форма добавления отзывов</h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="post" action="/review/check">
    @csrf
    <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
    <input type="text" name="name" id="name" placeholder="Введите ваще имя" class="form-control"><br>
    <textarea name="review" id="review" class="form-control" placeholder="Введите ваш отзыв"></textarea> <br>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>
<br>
<h1>Все отзывы</h1>
@foreach($reviews as $review)
    <div class="alert alert-warning">
        <h3>{{$review->name}}</h3>
        <b>{{$review->email}}}</b>
        <p>{{$review->review}}}</p>
    </div>
@endforeach
@endsection