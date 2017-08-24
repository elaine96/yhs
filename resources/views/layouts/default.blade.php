<html>
<head>
	<meta charset="utf-8">
	<title>雨花石APP后台管理</title>
	<meta name="keywords" content="雨花石APP官网,江苏海道企服电子商务有限公司,雨花石,雨花石APP,雨花石家政,雨花石货运,雨花石共享工具,雨花石钱找项目">
	<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('css/default.css')}}">
	<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">
</head>
<body>
	@include('layouts._header')
	@yield('content')
	@include('layouts._footer')
</body>
</html>