@section('games_search')

<div class = "container popup" id = "games_search">
	<form class = "search" method = "POST" action = "#">
		<label><h3>@show</h3></label>
		<input name = "game_name" type = "text" placeholder = "Поиск"/>
		<button type = "submit" class = "send">Найти</button>
	</form>
	<button class = "close" onclick = "close_games_search()">Закрыть</button>
</div>