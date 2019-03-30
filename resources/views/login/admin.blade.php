@extends('layouts.app')
@section('title', 'layui后台大布局')
@section('sidebar')
 @parent
@endsection
@section('content')
<div style="padding:30px">
<form class="layui-form" action="">
  @csrf
  <div class="layui-form-item">
    <label class="layui-form-label">管理员名称</label>
    <div class="layui-input-block">
      <input type="text" name="user_name" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">密码</label>
    <div class="layui-input-inline">
      <input type="password" name="user_pwd" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">辅助文字</div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">邮箱</label>
    <div class="layui-input-block">
      <input type="text" name="user_email" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>
 </div>
<script>
//Demo
layui.use(['form','layer'], function(){
  var form = layui.form;
  var layer = layui.layer;
  
  //监听提交
  form.on('submit(formDemo)', function(data){
    
    $.post(
      '/login/adminAdd',
      data.field,
      function(res){
        if(res.code==1){
          layer.confirm(res.font, {
            btn: ['继续添加', '跳转'] //可以无限个按钮
          }, function(index, layero){
            location.href="/login/admin";
          }, function(index){
            location.href="/login/adminlist";
          });
        }
      },
      'json'
    )
    return false;
  });
});
</script>
@endsection