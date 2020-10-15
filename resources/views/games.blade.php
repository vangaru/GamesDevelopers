@extends('layouts.dblayout')

@section('title-block')
	Игры
@endsection

@section('content')

@section('topboard')
	@parent
	<li><button class = "sort-button" onclick = "open_sort()">Сортировка</button></li>
	<li><button class = "search-button" onclick = "open_search()">Поиск</button></li>
	<li><button class = "add-button" onclick = "open_add()">Добавление</button></li>
	<li><button class = "delete-button" onclick = "open_delete()">Удаление</button></li>
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

	@section('sort')
		@parent
		Сортировка
	@endsection

	@section('search')
		@parent
		Найти игру по названию
	@endsection

	@section('add')
		@parent
		Введите данные игры
	@endsection

	@section('delete')
		@parent
		Удалить игру по названию
	@endsection

@endsection
	
@endsection
