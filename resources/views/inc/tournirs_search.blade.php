@section('tournirs_search')

<div class = "container popup" id = "tournirs_search">
	<form class = "search" method = "POST" action = "{{ route('one_tournir_search') }}">
		{{csrf_field()}}

		<label><h3>Найти турнир по названию</h3></label>
		<input name = "search_tournir_name" type = "text" placeholder = "Поиск"/>
		<button type = "submit" class = "send">Найти</button>
	</form>
	<button class = "close" onclick = "close_tournirs_search()">Закрыть</button>
</div>