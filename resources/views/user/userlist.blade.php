@extends('layouts.app')
@section('title', 'layui后台大布局')
@section('sidebar')
 @parent
@endsection
@section('content')
<div style="padding: 30px">
	<table border="1">
		<thead>
			<th>id</th>
			<th>管理员名称</th>
			<th>管理员邮箱</th>
		</thead>
		<tbody>
			@foreach($data as $k=>$v)
			<tr>
				<td>{{$v->user_id}}</td>
				<td>{{$v->user_name}}</td>
				<td>{{$v->user_email}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection