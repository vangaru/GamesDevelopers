@section('sort')

<div class = "container popup" id = "sort">
	<form class = "search" method = "POST" action = "#">
		<label><h3>@show</h3></label>

		<input type = "radio" name = "field" value = "Name of the game" id = "fieldChoice1"/>
		<label for = "fieldChoice1">По названию игры</label><br/>

		<input type = "radio" name = "field" value = "Developer" id = "fieldChoice2"/>
		<label for = "fieldChoice2">По разработчикам</label><br/>

		<input type = "radio" name = "field" value = "Year of release" id = "fieldChoice3"/>
		<label for = "fieldChoice3">По году выпуска</label><br/>

		<input type = "radio" name = "field" value = "Only for PC" id = "fieldChoice4"/>
		<label for = "fieldChoice">Вывести игры только для PC</label><br/>

		<input type = "radio" name = "field" value = "Only for Playstation" id = "fieldChoice5"/>
		<label for = "fieldChoice">Вывести игры только для Playstation</label><br/>

		<input type = "radio" name = "field" value = "Only for Xbox" id = "fieldChoice6"/>
		<label for = "fieldChoice">Вывести игры только для Xbox</label><br/>

		<button type = "submit" class = "send">Сортиовка</button>
	</form>
	<button class = "close" onclick = "close_sort()">Закрыть</button>
</div>