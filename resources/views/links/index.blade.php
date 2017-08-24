<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@extends('layouts.default')
@section('content')
<section class="col-md-12 body">
	<div class="col-md-8 col-md-offset-2 nindex">
		@include('shared.messages')
		<h3>链接地址 /Link</h3>
		@foreach($links as $link)
			<div class="clear"></div>
			<div class="link-box">
				<p>{{ $link->link_name }}</p>
				<p>{{ $link->link_href }}</p>
				<form action="{{ route('link_edit', $link->id) }}" method="post">
					{{ csrf_field() }} 
					<button class="btn btn-primary">修改</button>
				</form>
			<div class="clear"></div>
			</div>
			
			
		@endforeach
	</div>
	
</section>
@endsection