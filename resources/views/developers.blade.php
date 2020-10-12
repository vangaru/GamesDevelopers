@extends('layouts.dblayout')

@section('title-block')
	Разработчики
@endsection

@section('content')

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

@endsection
	
@endsection