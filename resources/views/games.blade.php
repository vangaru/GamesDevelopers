@extends('layouts.dblayout')

@section('title-block')
	Игры
@endsection

@section('content')

@section('topboard')
	@parent
	<li><button class = "sort-button" onclick = "open_games_sort()">Сортировка</button></li>
	<li><button class = "search-button" onclick = "open_games_search()">Поиск</button></li>
	<li><button class = "add-button" onclick = "open_games_add()">Добавление</button></li>
	<li><button class = "delete-button" onclick = "open_games_delete()">Удаление</button></li>
@endsection

@section('dbheader')
	@parent
		<a href = "{{ route('home') }}"><li>Домашняя</li></a>
		<a href = "{{ route('about') }}"><li> О нас </li></a>
@endsection

@section('main')
	@section('aside-bar')
		@parent
		<a href = "{{ route('database') }}">База данных</a>
		<a href = "{{ route('games') }}"><span class = "current-aside">Игры</span></a>
		<a href = "{{ route('developers') }}">Разработчики</a>
		<a href = "{{ route('tournirs') }}">Турниры</a>
	@endsection

	@section('games_sort')
		@parent
		Сортировка
	@endsection

	@section('games_search')
		@parent
		Найти игру по названию
	@endsection

	@section('games_add')
		@parent
		Введите данные игры
	@endsection

	@section('games_delete')
		@parent
		Удалить игру по названию
	@endsection

	@if($errors->any())
		<div class = "container alert">
			<ul>
				@foreach($errors->all() as $e)
					<li>
						{{ $e }}
					</li>
				@endforeach
			</ul>
		</div>
	@endif

	<div class = "container">
		<table align = "center">
			<tr class = "top">
				<td><h3>Название игры</h3></td>
				<td><h3>Разработчик</h3></td>
				<td><h3>Год выпуска</h3></td>
				<td><h3>Платформы</h3></td>
			</tr>
				@foreach($data as $element)
					<tr>
						<td><h3>{{ $element->name }}</h3></td>
						<td><h3>{{ $element->developer }}</h3></td>
						<td><h3>{{ $element->year_of_creation }}</h3></td>
						<td><h3>{{ $element->platforms }}</h3></td>
					</tr>
				@endforeach
		</table>
	</div>

@endsection
	
@endsection
