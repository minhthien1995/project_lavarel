<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Minh thien - @yield('title')</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		.wapper{ width: 980px;height: auto;margin: 0px auto }
		.header{width:auto;height: 200px;background: red}	
		.content{width: auto;height: 600px;background: blue}
		.footer{width: auto;height: 100px;background: green}
	</style>
</head>
<body>
	@include('views.marqee',['marquee'=>'xin chao cac ban da den voi khoa hoc laravel'])
	<div class="wapper">
		<div class="header">
			@section('sidebar')
				day la menu..
			@show
		</div>
		<div class="content">
			@yield('noidung')
		</div>
		<div class="footer"></div>
	</div>
</body>
</html>