@section('add')

<div class = "container popup" id = "add">
	<form class = "add" method = "POST" action = "#">
		<label><h3>@show</h3></label>
		<input name = "game-name" type = "text" placeholder = "Название игры"/>
		<input name = "dev-name" type = "text" placeholder = "Разработчики"/>
		<input name = "year" type = "number" placeholder = "Год релиза"/>
		<input name = "platforms" type = "text" placeholder = "Платформы"/>
		<button type = "submit" class = "send">Добавить</button>
	</form>
	<button class = "close" onclick = "close_add()">Закрыть</button>
</div>