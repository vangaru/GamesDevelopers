@extends('layouts.app')

@section('title-block')
	{{ $data->name }}
@endsection

@section('content')

@section('header')
	@parent
		<a href = "{{ route('home') }}"><li>Домашняя</li></a>
		<a href = "{{ route('about') }}"><li> О нас </li></a>
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
		<h1>Обновить данные {{ $data->name }}</h1>
		<form class = "update" method = "POST" action = "{{ route('one_tournir_update_submit', $data->id) }}">
			{{csrf_field()}}
			
			<div class = "container">
				<label for = "name"><big>Изменить название турнира</big></label><br/>
				<input name = "name" type = "text" value = "{{ $data->name }}"/>
			</div>

			<div class = "container">
				<label for = "game"><big>Изменить игру</big></label><br/>
				<input name = "game" type = "text" value = "{{ $data->game }}"/>
			</div>

			<div class = "container">
				<label for = "year"><big>Изменить дату проведения</big></label><br/>
				<input name = "date_of_tournir" type = "datetime-local" value = "{{ $data->date_of_tournir }}"/>
			</div>

			<div class = "container">
				<button type = "submit" class = "send">Обновить</button>
			</div>

		</form>
	</div>

@endsection

@endsection
