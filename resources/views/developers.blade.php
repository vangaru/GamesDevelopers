@extends('layouts.dblayout')

@section('title-block')
	Разработчики
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
		<a  href = "{{ route('about') }}"><li> О нас </li></a>
@endsection

@section('main')
	@section('aside-bar')
		@parent
		<a href = "{{ route('database') }}">База данных</a>
		<a href = "{{ route('games') }}">Игры</a>
		<a href = "{{ route('developers') }}"><span class = "current-aside">Разработчики</span></a>
		<a href = "{{ route('tournirs') }}">Турниры</a>
	@endsection

	@section('sort')
		@parent
		Сортировка
	@endsection

	@section('search')
		@parent
		Найти разработчиков по названию
	@endsection

	@section('add')
		@parent
		Введите данные разработчиков
	@endsection

	@section('delete')
		@parent
		Удалить разработчиков по названию
	@endsection

@endsection
	
@endsection
