@extends('layouts.app')
@section('title', 'layui后台大布局')
@section('sidebar')
 @parent
@endsection
@section('content')
<div style="padding:30px">
	<input type="hidden" id="token" value="{{csrf_token()}}">
<table border="1">
	<thead>
		<th><input type="checkbox">id</th>
		<th>客户名称</th>
		<th>联系人姓名</th>
		<th>性别</th>
		<th>QQ</th>
		<th>工作电话</th>
		<th>手机</th>
		<th>电子邮件</th>
		<th>操作</th>
	</thead>
	<tbody>
		@foreach($data as $k=>$v)
		
		<tr>
			<td><input type="checkbox">{{$v->l_id}}</td>
			<td>{{$v->l_unit}}</td>
			<td>{{$v->l_name}}</td>
			<td>
				@if($v->l_sex==1)
				男
				@else
				女
				@endif
			</td>
			<td>{{$v->qq_code}}</td>
			<td>{{$v->work_tel}}</td>
			<td>{{$v->phone}}</td>
			<td>{{$v->l_email}}</td>
			<td>
				<a href="/linkman/linkmandetail/{{$v->l_id}}">详细信息</a>
				<span class="del" l_id="{{$v->l_id}}" style="cursor: pointer;">删除</span>
				<a href="/linkman/linkmanupd/{{$v->l_id}}">修改</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{$data->links()}}
</div>
<script type="text/javascript">
	$(function(){
		layui.use(['form','layer'],function(){
			$('.del').click(function(){
				var _this=$(this);
				var l_id=_this.attr('l_id');
				var _token=$('#token').val();
				$.post(
					"/linkman/linkmandel",
					{_token:_token,l_id:l_id},
					function(res){
						layer.msg(res.font,{icon:res.code})
						if(res.code==1){
							history.go(0);
						}
					},
					'json'
				)
			})
		})
	})

</script>
@endsection