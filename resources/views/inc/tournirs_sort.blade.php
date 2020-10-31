@section('tournirs_sort')

<div class = "container popup sort" id = "tournirs_sort">
	<form class = "search" method = "POST" action = "{{ route('tournirs_sort') }}">
		{{csrf_field()}}
		
		<label><h3>Сортировка</h3></label>

		<input type = "radio" name = "field" value = "name" id = "fieldChoice1"/>
		<label for = "fieldChoice1">По названию турнира</label><br/>
		
		<input type = "radio" name = "field" value = "game" id = "fieldChoice2"/>
		<label for = "fieldChoice2">По игре</label><br/>

		<input type = "radio" name = "field" value = "date_of_tournir" id = "fieldChoice3"/>
		<label for = "fieldChoice3">По дате проведения</label><br/>

		<button type = "submit" class = "send">Сортиовка</button>
	</form>
	<button class = "close" onclick = "close_tournirs_sort()">Закрыть</button>
</div>