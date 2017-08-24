<div class="modal fade" id="modal-fea-delete">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					×
				</button>
				<h4 class="modal-title">请确认</h4>
			</div>
			<div class="modal-body">
				<p class="lead">
					<i class="fa fa-question-circle fa-lg"></i>
					你确定要删除功能
					<kbd><span id="delete-fea-name1">fea</span></kbd>
					?
				</p>
			</div>
			<div class="modal-footer">
				<form method="POST" action="" id="delete-fea-name2">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="_method" value="DELETE">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						取消
					</button>
					<button type="submit" class="btn btn-danger">
						删除
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
