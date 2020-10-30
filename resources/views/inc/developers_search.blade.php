@section('developers_search')

<div class = "container popup" id = "developers_search">
	<form class = "search" method = "POST" action = "{{ route('one_developer_search') }}">
		{{csrf_field()}}
		<label><h3>Найти компанию по названию</h3></label>
		<input name = "name" type = "text" placeholder = "Поиск"/>
		<button type = "submit" class = "send">Найти</button>
	</form>
	<button class = "close" onclick = "close_developers_search()">Закрыть</button>
</div>