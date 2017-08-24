<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@extends('layouts.default')
@section('content')


<section class="col-md-12 body">
	<div class="col-md-offset-2 col-md-8 nindex">
		@include('shared.messages')
		<div id="featotal">
			<h3>产品介绍 <span>/Introduction</span></h3>
			@if(Auth::check())
				<a href="{{ route('fea_create') }}"><button class="btn btn-primary">添加介绍</button></a>
			@endif
			<div id="fea">
				@foreach($feaes as $fea)
					<div class="onefea">
						<!-- <div class="newdate">
							{{ $fea->created_at->year }}.{{ $fea->created_at->month }}
							<p>{{ $fea->created_at->day }}</p>
						</div> -->
						<p class="title">
							{{ $fea->fea_title }}
						</p>
						<div class="msgs">
							{!! $fea->fea_content !!}
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
						@if(Auth::check())
						<div class="indexbtn">
							{{ method_field('DELETE') }}
							{{ csrf_field() }} 
							<button class="btn btn-danger ReButton" style="float: right;" onclick="delete_fea('{{ $fea->fea_title }}','{{ route('fea_delete', $fea->id) }}')">删除</button>
							<!-- id="btn-{{$fea->id}}" -->
							<form action="{{ route('fea_edit', $fea->id) }}" method="post">
								{{ csrf_field() }} 
								<button class="btn btn-primary" style="float: right;">修改</button>
							</form>
						</div>
						@endif
						<div class="clear"></div>
					</div>
				@endforeach
				<div class="clear"></div>
				{!! $feaes->links() !!}
			</div>
		</div>
		<div class="clear"></div>
	</div>
</section>
@include('features._modals')
<script>
	function delete_fea(name,route) {
		$("#delete-fea-name1").html(name);
		$("#delete-fea-name2").attr('action',route);
		$("#modal-fea-delete").modal("show");
	}
	$('img').removeAttr('style');
</script>
<script>
	// $('.ReButton').click(function(){
	// 	var feaid=($(this).attr('id').replace(/btn\-/i,''));

	// 	if(confirm("确定要删除么？")){
	// 		$.ajax({
	// 			url:"/fea/"+feaid,
	// 			type:'post',
	// 			success:function(){
	// 				window.location.reload();
	// 			}
	// 		})
	// 	}
	// })
</script>

@endsection