<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Vila Langit Biru</title>

	<!-- Bootstrap core CSS -->
    {!! Html::style(elixir('css/app.css')) !!}
</head>
<body>

	@yield('contents')

	<!-- jQuery -->
	<script type="text/javascript">
		@yield('scripts')
	</script>
	
	@yield('script_plugin')
</body>

</html>