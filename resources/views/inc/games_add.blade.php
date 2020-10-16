@section('games_add')

<div class = "container popup" id = "games_add">
	<form class = "add" method = "POST" action = "{{ route('games_addition') }}">
		{{csrf_field()}}

		<label><h3>@show</h3></label>
		<input name = "game_name" type = "text" placeholder = "Название игры" required="" />
		<input name = "dev_name" type = "text" placeholder = "Разработчики" required="" />
		<input name = "year" type = "datetime-local" placeholder = "Год релиза" required="" />
		<input name = "platforms" type = "text" placeholder = "Платформы" required="" />
		<button type = "submit" class = "send">Добавить</button>
	</form>
	<button class = "close" onclick = "close_games_add()">Закрыть</button>
</div>