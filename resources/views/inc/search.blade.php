@section('search')

<div class = "container popup" id = "search">
	<form class = "search" method = "POST" action = "#">
		<label><h3>@show</h3></label>
		<input name = "game-name" type = "text" placeholder = "Поиск"/>
		<button type = "submit" class = "send">Найти</button>
	</form>
	<button class = "close" onclick = "close_search()">Закрыть</button>
</div>