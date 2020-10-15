<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8"/>
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0"/>
	<meta http-equiv = "X-UA-Compatible" content = "ie=edge"/>
	<title>@yield('title-block')</title>
	<link rel = "stylesheet" href = "/css/app.css">
	<script src="{{ asset('/js/openForms.js') }}"></script>
	<script src="{{ URL::asset('/js/openForms.js') }}"></script>
	<script src="/js/openForms.js"></script>
</head>

<body>

	@yield('content')

	@include('inc.dbheader')

	<div class = "container-main">
		<div class = "container pop-list">
			@include('inc.sort')
			@include('inc.search')
			@include('inc.add')
			@include('inc.delete')
		</div>

		@include('inc.aside-bar')

		@yield('main')
	</div>

	@include('inc.footer')

</body>
</html>