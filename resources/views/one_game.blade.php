@extends('layouts.app')

@section('title-block')
	{{ $data->name }}
@endsection

@section('content')

@section('header')
	@parent
		<a href = "{{ route('home') }}"><li>Домашняя</li></a>
		<a  href = "{{ route('about') }}"><li> О нас </li></a>
@endsection

@section('main')

	@section('aside-bar')
		@parent
		<a href = "{{ route('database') }}">База данных</a>
		<a href = "{{ route('games') }}">Игры</a>
		<a href = "{{ route('developers') }}">Разработчики</a>
		<a href = "{{ route('tournirs') }}">Турниры</a>
	@endsection

	<div class = "container">
		<h1> {{ $data->name }} </h1>
	</div>

	<div class = "container">
		<table align = "center">
			<tr class = "top">
				<td><h3>Название игры</h3></td>
				<td><h3>Разработчик</h3></td>
				<td><h3>Год выпуска</h3></td>
				<td><h3>Платформы</h3></td>
			</tr>
			<tr>
				<td><h3>{{ $data->name  }}</h3></td>
				<td><h3>{{ $data->developer }}</h3></td>
				<td><h3>{{ $data->year_of_creation }}</h3></td>
				<td><h3>{{ $data->platforms }}</h3></td>
			</tr>
		</table>
	</div>

	<div class = "container buttons">
		<div class = "update">
			<a href = "{{ route('one_game_update', $data->id) }}"><button>Обновить</button></a>
		</div>

		<div class = "delete">
			<a href = "{{ route('one_game_delete', $data->id) }}"><button>Удалить</button></a>
		</div>
	</div>

@endsection

@endsection
