<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@extends('layouts.default')
@section('content')
<section class="col-md-12 body">
	<div class="col-md-offset-2 col-md-8">
		<form action="{{ route('link_update',$link->id) }}" method="post">
        	{{ method_field('PATCH') }}
			{{ csrf_field() }}
			@include('shared.messages')
			@include('shared.errors')
			<h1>{{ $link->link_name }}</h1>
			
			<div class="">
				<label for="content" class="col-sm-2 control-label">
					正文
				</label>
				<div class="col-sm-9">
					<input name="link_href" class="form-control" value="{{ $link->link_href }}">

					<div class="clear"></div>
			
					<div class="">
						<a href="{{ route('links') }}"><button class="btn btn-default" type="button">取消</button></a>
						<button class="btn btn-primary" type="submit">修改</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>

@endsection