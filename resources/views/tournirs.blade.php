@extends('layouts.dblayout')

@section('title-block')
	Турниры
@endsection

@section('content')

@section('topboard')
	@parent
	<li><button class = "sort-button" onclick = "open_tournirs_sort()">Сортировка</button></li>
	<li><button class = "search-button" onclick = "open_tournirs_search()">Поиск</button></li>
	<li><button class = "add-button" onclick = "open_tournirs_add()">Добавление</button></li>
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
		<a href = "{{ route('developers') }}">Разработчики</a>
		<a href = "{{ route('tournirs') }}"><span class = "current-aside">Турниры</span></a>
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
				<td><h3>Название турнира</h3></td>
				<td><h3>Игра</h3></td>
				<td><h3>Дата проведения</h3></td>
			</tr>
				@foreach($data as $element)
					<tr>
						<td><a href = "{{ route('one_game_data', $element->id) }}"><h3>{{ $element->name }}</h3></a></td>
						<td><h3>{{ $element->game }}</h3></td>
						<td><h3>{{ $element->date_of_tournir }}</h3></td>
					</tr>
				@endforeach
		</table>
	</div>

@endsection
	
@endsection
