@section('games_delete')

<div class = "container popup" id = "games_delete">
	<form class = "search" method = "POST" action = "#">
		<label><h3>@show</h3></label>
		<input name = "game_name" type = "text" placeholder = "Поиск"/>
		<button type = "submit" class = "send">Удалить</button>
	</form>
	<button class = "close" onclick = "close_games_delete()">Закрыть</button>
</div>