@extends('layouts.dblayout')

@section('title-block')
	Разработчики
@endsection

@section('content')

@section('topboard')
	@parent
	<li><button class = "sort-button" onclick = "open_developers_sort()">Сортировка</button></li>
	<li><button class = "search-button" onclick = "open_developers_search()">Поиск</button></li>
	<li><button class = "add-button" onclick = "open_developers_add()">Добавление</button></li>
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
		<a href = "{{ route('games') }}">Игры</a>
		<a href = "{{ route('developers') }}"><span class = "current-aside">Разработчики</span></a>
		<a href = "{{ route('tournirs') }}">Турниры</a>
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
				<td><h3>Название компании</h3></td>
				<td><h3>Президент</h3></td>
				<td><h3>Год основания</h3></td>
			</tr>
				@foreach($data as $element)
					<tr>
						<td><a href = "{{ route('one_developer_data', $element->id) }}"><h3>{{ $element->name }}</h3></a></td>
						<td><h3>{{ $element->president }}</h3></td>
						<td><h3>{{ $element->year_of_creation }}</h3></td>
					</tr>
				@endforeach
		</table>
	</div>

@endsection
	
@endsection
