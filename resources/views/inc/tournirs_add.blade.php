@section('tournirs_add')

<div class = "container popup" id = "tournirs_add">
	<form class = "add" method = "POST" action = "{{ route('tournirs_addition') }}">
		{{csrf_field()}}

		<label><h3>Введите данные турнира</h3></label>
		<input name = "name" type = "text" placeholder = "Название турнира" required="" />
		<input name = "game" type = "text" placeholder = "Игра" required="" />
		<input name = "date_of_tournir" type = "datetime-local" placeholder = "Год проведения" required="" />
		<button type = "submit" class = "send">Добавить</button>
	</form>
	<button class = "close" onclick = "close_tournirs_add()">Закрыть</button>
</div>