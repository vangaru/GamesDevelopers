@extends('layouts.app')

@section('title-block')
	База данных
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
		<a href = "{{ route('database') }}"><span class = "current-aside">База данных</span></a>
		<a href = "{{ route('games') }}">Игры</a>
		<a href = "{{ route('developers') }}">Разработчики</a>
		<a href = "{{ route('tournirs') }}">Турниры</a>
	@endsection

	<div class = "container">
		<h1><a href = "{{ route('developers') }}">Разработчики</a></h1>
		<table align = "center">
			<tr class = "top">
				<td><h3>Название компании</h3></td>
				<td><h3>Президент</h3></td>
				<td><h3>Год основания</h3></td>
			</tr>
				@foreach($DevelopersData as $element)
					<tr>
						<td><a href = "{{ route('one_developer_data', $element->id) }}"><h3>{{ $element->name }}</h3></a></td>
						<td><h3>{{ $element->president }}</h3></td>
						<td><h3>{{ $element->year_of_creation }}</h3></td>
					</tr>
				@endforeach
		</table>

		<h1><a href = "{{ route('games') }}">Игры</a></h1>
		<table align = "center">
			<tr class = "top">
				<td><h3>Название игры</h3></td>
				<td><h3>Разработчик</h3></td>
				<td><h3>Год выпуска</h3></td>
				<td><h3>Платформы</h3></td>
			</tr>
				@foreach($GamesData as $element)
					<tr>
						<td><a href = "{{ route('one_game_data', $element->id) }}"><h3>{{ $element->name }}</h3></a></td>
						<td><h3>{{ $element->developer }}</h3></td>
						<td><h3>{{ $element->year_of_creation }}</h3></td>
						<td><h3>{{ $element->platforms }}</h3></td>
					</tr>
				@endforeach
		</table>

		<h1><a href = "{{ route('tournirs') }}">Турниры</a></h1>
		<table align = "center">
			<tr class = "top">
				<td><h3>Название турнира</h3></td>
				<td><h3>Игра</h3></td>
				<td><h3>Дата проведения</h3></td>
			</tr>
				@foreach($TournirsData as $element)
					<tr>
						<td><a href = "{{ route('one_tournir_data', $element->id) }}"><h3>{{ $element->name }}</h3></a></td>
						<td><h3>{{ $element->game }}</h3></td>
						<td><h3>{{ $element->date_of_tournir }}</h3></td>
					</tr>
				@endforeach
		</table>
	</div>
@endsection
	
@endsection
