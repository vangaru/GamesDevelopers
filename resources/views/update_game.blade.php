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
		<form class = "update" method = "POST" action = "{{ route('one_game_update_submit', $data->id) }}">
			{{csrf_field()}}
			
			<div class = "container">
				<label for = "game_name"><big>Изменить название игры</big></label><br/>
				<input name = "game_name" type = "text" value = "{{ $data->name }}"/>
			</div>

			<div class = "container">
				<label for = "dev_name"><big>Изменить разработчиков</big></label><br/>
				<input name = "dev_name" type = "text" value = "{{ $data->developer }}"/>
			</div>

			<div class = "container">
				<label for = "year"><big>Изменить год релиза</big></label><br/>
				<input name = "year" type = "datetime-local"/>
			</div>

			<div class = "container">
				<label for = "platforms"><big>Изменить платформы</big></label><br/>
				<input name = "platforms" type = "text" value = "{{ $data->platforms }}"/>
			</div>

			<div class = "container">
				<button type = "submit" class = "send">Обновить</button>
			</div>

		</form>
	</div>

@endsection

@endsection
