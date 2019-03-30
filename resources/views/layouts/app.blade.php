<!DOCTYPE html>
<html> 
	<head>
	 	<title>应用名称 - @yield('title')</title>
	 	 	  <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			  <script src="/layui/layui.js"></script>
			  <script src="/js/jquery-3.2.1.min.js"></script>
			  <link rel="stylesheet" href="/layui/css/layui.css">
			  <link rel="stylesheet" href="/css/page.css">

	</head>
		@section('sidebar') 
			
			
			 
			<body class="layui-layout-body">
			<div class="layui-layout layui-layout-admin">
			  <div class="layui-header">
			    <div class="layui-logo">layui 后台布局</div>
			    <!-- 头部区域（可配合layui已有的水平导航） -->
			     
			    @if(session('user.user_name'))
			    <ul class="layui-nav layui-layout-right">
			      <li class="layui-nav-item">
			        <a href="javascript:;">
			          <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
			          {{session('user.user_name')}}
			        </a>
			        <dl class="layui-nav-child">
			          <dd><a href="/login/quit">退出</a></dd>
			        </dl>
			      </li>
			      <li class="layui-nav-item"><a href="/login/quit">退了</a></li>
			    </ul>
			    @else
			    <ul class="layui-nav layui-layout-left">
			      <li class="layui-nav-item"><a href="/login/login">登录</a></li>
			      <li class="layui-nav-item"><a href="">注册</a></li>
			      
			    </ul>
			    @endif
			  </div>
			  
			  <div class="layui-side layui-bg-black">
			    <div class="layui-side-scroll">
			      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
			      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
			        <li class="layui-nav-item ">
			          <a class="" href="javascript:;">联系人管理</a>
			          <dl class="layui-nav-child">
			            <dd><a href="/linkman/linkman">联系人添加</a></dd>
			            <dd><a href="/linkman/linkmanList">联系人列表</a></dd>
			          </dl>
			        </li>
			      </ul>
			      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
			        <li class="layui-nav-item ">
			          <a class="" href="javascript:;">管理员管理</a>
			          <dl class="layui-nav-child">
			            <dd><a href="/login/admin">管理员添加</a></dd>
			            <dd><a href="/login/adminlist">管理员列表</a></dd>
			          </dl>
			        </li>
			      </ul>
			    </div>
			  </div>
			  
			  <div class="layui-body">
		@show 
		<div class="container"> @yield('content') </div> 
		  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
  </div>
</div>

<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
</script>
</body>
</html>