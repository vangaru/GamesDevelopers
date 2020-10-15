@section('delete')

<div class = "container popup" id = "delete">
	<form class = "search" method = "POST" action = "#">
		<label><h3>@show</h3></label>
		<input name = "game-name" type = "text" placeholder = "Поиск"/>
		<button type = "submit" class = "send">Удалить</button>
	</form>
	<button class = "close" onclick = "close_delete()">Закрыть</button>
</div>