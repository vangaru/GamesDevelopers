@section('games_search')

<div class = "container popup" id = "games_search">
	<form class = "search" method = "POST" action = "{{ route('one_game_search') }}">
		{{csrf_field()}}
		
		<label><h3>Найти игру по названию</h3></label>
		<input name = "search_game_name" type = "text" placeholder = "Поиск"/>
		<button type = "submit" class = "send">Найти</button>
	</form>
	<button class = "close" onclick = "close_games_search()">Закрыть</button>
</div>