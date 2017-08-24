<html>
<head>
	<meta charset="utf-8">
	<title>雨花石APP</title>
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.DB_tabMotionBanner.min.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
	<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">
</head>
<body>
	<section id="pc">
		<div class="col-md-10 col-md-offset-1">
			<div class="navi">
				<img src="{{ asset('images/logo.png') }}" alt="" class="logo">
				<img src="{{ asset('images/name.png') }}" alt="" class="name">
				<a href="{{ route('login') }}"><div class="admin"></div></a>
				<ul class="home">
					<li><a href="mailto:haixingce@163.com">联系我们</a></li>
					<li><a href="http://www.jshdqf.com" target="_blank">海道官网</a></li>
					<li data-toggle="modal" data-target="#download">下载</li>
					<li class="active"><a href="#">首页</a></li>
					<div class="modal fade" id="download" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title" id="myModalLabel">
										雨花石APP下载
									</h4>
								</div>
								<div class="modal-body">
									@foreach ($files as $file)
										@if($file['mimeType'] == 'image/gif')
											<img class="img" src="{{ $file['webPath'] }}" alt="">
										@endif
									@endforeach
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">关闭
									</button>
								</div>
							</div>
						</div>
					</div>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
		
		<div id="banner">
			<div class="DB_tab25">
				<ul class="DB_bgSet">
					@foreach ($files as $file)
						@if($file['mimeType'] == 'image/jpeg')
							<li>
								<img class="img" src="{{ $file['webPath'] }}" alt="">
							</li>
						@endif
					@endforeach
				</ul>
				<ul class="DB_imgSet">
					@foreach ($files as $file)
						@if($file['mimeType'] == 'image/jpeg')
							<li></li>
						@endif
					@endforeach
				</ul>
				<div class="DB_menuWrap">
					<ul class="DB_menuSet">
						@foreach ($files as $file)
							@if($file['mimeType'] == 'image/jpeg')
								<li>
									<img src="{{asset('images/btn_off.png')}}" />
								</li>
							@endif
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		
		@foreach($feaes as $fea)
		<div class="func-box">
			<h1>{{ $fea->fea_title }}</h1>
			{!! $fea->fea_content !!}
			<div class="clear"></div>
		</div>
		@endforeach
		<div class="clear"></div>
		<div class="footer">
			<span>版权所有 &copy; 2017 江苏海道企服电子商务有限公司</span>
			<span><a href="http://www.miitbeian.gov.cn/" target="_blank">备案号</a></span>
		</div>
	</section>

	<section id="mobile">
		<img src="{{asset('images/logom.png')}}" class="logo" alt="">
		<div class="DB_tab25">
			<ul class="DB_bgSet">
				@foreach ($files as $file)
					@if($file['mimeType'] == 'image/png')
						<li>
							<img class="img" src="{{ $file['webPath'] }}" alt="">
						</li>
					@endif
				@endforeach
			</ul>
			<ul class="DB_imgSet">
				@foreach ($files as $file)
					@if($file['mimeType'] == 'image/png')
						<li></li>
					@endif
				@endforeach
			</ul>
			<div class="DB_menuWrap">
				<ul class="DB_menuSet">
					@foreach ($files as $file)
						@if($file['mimeType'] == 'image/png')
							<li>
								<img src="{{asset('images/btn_off.png')}}" />
							</li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		
		<div style="width: 100%;">
			@foreach($links as $link)
			<div class="btn-{{ $link->link_icon }}">
				<a href="{{ $link->link_href }}">
					<i class="fa fa-{{ $link->link_icon }}"></i>
					<span>{{ $link->link_name }}</span>
				</a>
			</div>
				
			@endforeach
		</div>
	</section>
	<script type="text/javascript">
		$('.home li').mouseover(function() {
			$(this).siblings("li").removeClass("active");
			$(this).addClass("active");
		});
		$('.home li').mouseout(function() {
			$('.home li').siblings("li").removeClass("active");
			$(".home li:nth-child(4)").addClass("active");
		});

		$('img').removeAttr('style');
		$('.f-hide:nth-child(2)').attr('class', 'm-page');
	</script>

	<script type="text/javascript">
		$('.DB_tab25').DB_tabMotionBanner({
			key: 'b28551',
			autoRollingTime: 6000,
			bgSpeed: 500,
			motion: {
			DB_1_1: { left: -50, opacity: 0, speed: 1000, delay: 1000 },
			DB_2_1: { top: 50, opacity: 0, speed: 1000, delay: 1000 },
			DB_3_1: { top: -50, opacity: 0, speed: 1000, delay: 1000 },
			end: null
			}
		});
	</script>
</body>
</html>