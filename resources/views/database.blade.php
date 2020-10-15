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

@endsection
	
@endsection
