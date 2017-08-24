<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@extends('layouts.default')
@section('content')


<section class="col-md-12 body">
	<div class="col-md-offset-2 col-md-8 fea-box">
		<form action="{{ route('fea_update',$fea->id) }}" method="post">
			{{ method_field('PATCH') }}
			{{ csrf_field() }}
			@include('shared.messages')
			@include('shared.errors')
			<div class="form-group feat">
				<label for="title" class="col-sm-2 control-label">
					功能
				</label>
				<div class="col-sm-9">
					<input class="form-control" type="text" id="title" name="fea_title" value="{{ $fea->fea_title }}">
				</div>
			</div>
			<div class="clear"></div>
			<div class="form-group feac">
				<label for="content" class="col-sm-2 control-label">
					介绍
				</label>
				<div class="col-sm-9">
					<textarea id="content" name="fea_content" class="form-control">{!! $fea->fea_content !!}</textarea>

					<div class="clear"></div>
			
					<div class="feabtn">
						<a href="{{ route('feature') }}"><button class="btn btn-default" type="button">取消</button></a>
						<button class="btn btn-primary" type="submit">修改</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
<script type="text/javascript" src="{{asset('/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="{{asset('/ckfinder/ckfinder.js')}}"></script>
<script type="text/javascript">
	window.onload = function() {
		var content = CKEDITOR.replace( 'content',
		{
			language: 'zh-cn',
			height: 330,
			filebrowserBrowseUrl : "{{asset('/ckfinder/ckfinder.html')}}",
			filebrowserImageBrowseUrl : "{{asset('/ckfinder/ckfinder.html?type=Images')}}",
			filebrowserFlashBrowseUrl : "{{asset('/ckfinder/ckfinder.html?type=Flash')}}",
			filebrowerUploadUrl : "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}",
			filebrowerImageUploadUrl : "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images')}}",
			filebrowerFlashUploadUrl : "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash')}}",
		});
	}
</script>
@endsection