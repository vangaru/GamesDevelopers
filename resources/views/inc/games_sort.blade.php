@section('games_sort')

<div class = "container popup sort" id = "games_sort">
	<form class = "search" method = "POST" action = "{{ route('games_sort') }}">
		{{csrf_field()}}
		<label><h3>Сортировка</h3></label>

		<input type = "radio" name = "field" value = "name" id = "fieldChoice1"/>
		<label for = "fieldChoice1">По названию игры</label><br/>
		
		<input type = "radio" name = "field" value = "developer" id = "fieldChoice2"/>
		<label for = "fieldChoice2">По разработчикам</label><br/>

		<input type = "radio" name = "field" value = "year_of_creation" id = "fieldChoice3"/>
		<label for = "fieldChoice3">По году выпуска</label><br/>

		<button type = "submit" class = "send">Сортиовка</button>
	</form>
	<button class = "close" onclick = "close_games_sort()">Закрыть</button>
</div>