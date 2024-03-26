@extends('layout')

@section('title')
    {{ $data->name }}
@endsection

@section('main_content')
    <h1>Отзыв</h1>
    <br>
    <hr>
    <div class="row gap-5">
        <div class="alert alert-warning col">
            <h3>{{ $data->name }}</h3>
            <p>{{ $data->email }}</p>
            <p>{{ $data->massage }}</p>

            <a href="/reviews" class="btn btn-success">Назад</a>
            <a href="{{ route('reviews-edit', $data->id) }}" class="btn btn-success">Редактировать</a>
        </div>
    </div>
@endsection
