@section('developers_sort')

<div class = "container popup sort" id = "developers_sort">
	<form class = "search" method = "POST" action = "{{ route('developers_sort') }}">
		{{csrf_field()}}
		<label><h3>Сортировка</h3></label>

		<input type = "radio" name = "field" value = "name" id = "fieldChoice1"/>
		<label for = "fieldChoice1">По названию компании</label><br/>
		
		<input type = "radio" name = "field" value = "president" id = "fieldChoice2"/>
		<label for = "fieldChoice2">По президенту</label><br/>

		<input type = "radio" name = "field" value = "year_of_creation" id = "fieldChoice3"/>
		<label for = "fieldChoice3">По году основания</label><br/>

		<button type = "submit" class = "send">Сортиовка</button>
	</form>
	<button class = "close" onclick = "close_developers_sort()">Закрыть</button>
</div>