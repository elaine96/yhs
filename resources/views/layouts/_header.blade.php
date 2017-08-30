<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<!-- <i class="fa fa-gear fa-spin spin"></i> -->
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#subnavi">
				<span class="sr-only">切换导航</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<img src="{{asset('images/logo.png')}}" alt="">
			<img src="{{asset('images/name.png')}}" alt="">
			<a href="{{ route('login') }}"><div class="admin"></div></a>
		</div>
		
		<div class="collapse navbar-collapse" id="subnavi">
			<ul class="nav navbar-nav">
				<li class="dropdown" style="float: right; margin-right: 10%;">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Admin <b class="caret"></b>
					</a>
					<ul class="dropdown-menu" style="float: right;">
						<li><a href="{{ route('links') }}">链接管理</a></li>
						<li><a href="{{ route('picture') }}">图片管理</a></li>
						<li><a href="{{ route('feature') }}">介绍管理</a></li>
						<li class="divider"></li>
						<li>
							<a id="logout" href="{{ route('logout') }}">
								<button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>	
</nav>