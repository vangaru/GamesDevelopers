@extends('layouts.app')

@section('title-block')
	Домашняя
@endsection

@section('content')

@section('header')
	@parent
		<a href = "{{ route('home') }}"><li class = "current-li">Домашняя</li></a>
		<a  href = "{{ route('about') }}"><li> О нас </li></a>
@endsection

@section('main')

	@section('aside-bar')
		@parent
		<a href = "{{ route('database') }}">База данных</a>
		<a href = "{{ route('games') }}">Игры</a>
		<a href = "{{ route('developers') }}">Разработчики</a>
		<a href = "{{ route('tournirs') }}">Турниры</a>

	@endsection

	<div class = "container page-title">Новости</div>

	<div class = "container game-news">
		<nav class = "game-news-list">
			<ul>

				<li>
					<div class = "game-news-element">
						<img src = "https://img.championat.com/s/735x490/news/big/k/r/pochemu-stoit-kupit-playstation-5_15968880781568294177.jpg"/>
						<div class = "description">
							<a href = "https://stopgame.ru/newsdata/45150">
								82% опрошенных предзаказчиков некстген-консоли в США выбрали PlayStation 5
							</a>
							<br/>
							<div class = "date">09 октября 2020</div>
						</div>
					</div>
					<hr/>			
				</li>
	
				<li>
					<div class = "game-news-element">
						<img src = "https://i.ytimg.com/vi/plFPYcY0Yec/maxresdefault.jpg"/>
						<div class = "description">
							<a href = "https://stopgame.ru/newsdata/45149">
								В Steam начнут раздавать Sonic <br/> the Hedgehog 2
							</a>
							<br/>
							<div class = "date">09 октября 2020</div>
						</div>
					</div>
					<hr/>			
				</li>
	
				<li>
					<div class = "game-news-element">
						<img src = "https://images.pushsquare.com/97028b889d49a/final-fantasy-16-ps5-playstation-5-1.original.jpg"/>
						<div class = "description">
							<a href = "https://stopgame.ru/newsdata/45148">
								Основная разработка Final Fantasy XVI уже завершена
							</a>
							<br/>
							<div class = "date">08 октября 2020</div>
						</div>
					</div>
					<hr/>			
				</li>

				<li>
					<div class = "game-news-element">
						<img src = "https://gagadget.com/media/post_big/fh_news_21-08-2018-header_thumb_fhgamescom_333941.jpg"/>
						<div class = "description">
							<a href = "https://stopgame.ru/newsdata/45142">
								For Honor будет доступна на некстгене с полным переносом прогресса
							</a>
							<br/>
							<div class = "date">08 октября 2020</div>
						</div>
					</div>		
				</li>

			</ul>
		</nav>
	</div>

@endsection

@endsection
