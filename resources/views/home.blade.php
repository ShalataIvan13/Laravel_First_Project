@extends('layouts.app')

@section('title-block')
    <title>Главная страница</title>
@endsection

@section('content')
    <h1>Главная страница</h1>
    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum doloribus totam aliquam pariatur eos error esse. Tempore, aperiam id vitae illo rem, quisquam possimus repellat pariatur magnam blanditiis, cumque necessitatibus.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum doloribus totam aliquam pariatur eos error esse. Tempore, aperiam id vitae illo rem, quisquam possimus repellat pariatur magnam blanditiis, cumque necessitatibus.</p>
@endsection

@section('aside')
@parent
    <p>Дополнительный текст</p>
@endsection