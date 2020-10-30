@section('developers_add')

<div class = "container popup" id = "developers_add">
	<form class = "add" method = "POST" action = "{{ route('developers_addition') }}">
		{{csrf_field()}}

		<label><h3>Введите данные компании</h3></label>
		<input name = "name" type = "text" placeholder = "Название компании" required="" />
		<input name = "president" type = "text" placeholder = "Президент" required="" />
		<input name = "year_of_creation" type = "datetime-local" placeholder = "Год создания" required="" />
		<button type = "submit" class = "send">Добавить</button>
	</form>
	<button class = "close" onclick = "close_developers_add()">Закрыть</button>
</div>