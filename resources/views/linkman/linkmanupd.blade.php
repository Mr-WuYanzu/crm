@extends('layouts.app')
@section('title', 'layui后台大布局')
@section('sidebar')
 @parent
@endsection
@section('content')
<div style="padding:30px">
<form class="layui-form" action="" onsubmit="return false">
	@csrf
  <input type="hidden" name="l_id" value="{{$data->l_id}}" />
  <div class="layui-form-item">
    <label class="layui-form-label">联系人单位</label>
    <div class="layui-input-block">
      <input type="text" name="l_unit" value="{{$data->l_unit}}" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">联系人职位</label>
    <div class="layui-input-inline">
      <input type="text" name="l_position" value="{{$data->l_position}}" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">辅助文字</div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">联系人姓名</label>
   <div class="layui-input-inline">
      <input type="text" name="l_name" value="{{$data->l_name}}" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">辅助文字</div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">性别</label>
    <div class="layui-input-block">
      @if($data->l_sex==1)
      <input type="radio" name="l_sex" value="1" title="男" checked />
      <input type="radio" name="l_sex" value="2" title="女" />
      @else
      <input type="radio" name="l_sex" value="1" title="男"/>
      <input type="radio" name="l_sex" value="2" title="女" checked  />
      @endif
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">生日</label>
    <div class="layui-input-inline">
      <input type="date" name="l_birthday" value="{{$data->l_birthday}}" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux"></div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">爱好</label>
    <div class="layui-input-inline">
      <input type="text" name="l_hover" value="{{$data->l_hover}}" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux"></div>
  </div>
  
  <div class="layui-form-item">
    <label class="layui-form-label">家庭邮编</label>
    <div class="layui-input-inline">
      <input type="text" name="home_code" value="{{$data->home_code}}" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">辅助文字</div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">家庭住址</label>
    <div class="layui-input-inline">
      <input type="text" name="home_address" value="{{$data->home_address}}" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">辅助文字</div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">工作电话</label>
    <div class="layui-input-inline">
      <input type="text" name="work_tel" value="{{$data->work_tel}}" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">辅助文字</div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">家庭电话</label>
    <div class="layui-input-inline">
      <input type="text" name="home_tel" value="{{$data->home_tel}}" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">辅助文字</div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">手机</label>
    <div class="layui-input-inline">
      <input type="text" name="phone" value="{{$data->phone}}" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">辅助文字</div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">邮箱</label>
    <div class="layui-input-inline">
      <input type="text" name="l_email" value="{{$data->l_email}}" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">辅助文字</div>
  </div>
   <div class="layui-form-item">
    <label class="layui-form-label">QQ号码</label>
    <div class="layui-input-inline">
      <input type="text" name="qq_code" value="{{$data->qq_code}}" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">辅助文字</div>
  </div>
   
  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">备注</label>
    <div class="layui-input-block">
      <textarea name="l_remark" placeholder="请输入内容" class="layui-textarea">{{$data->l_remark}}</textarea>
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit lay-filter="formDemo">提交修改</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>
</div>
 
<script>
//Demo
layui.use('form', function(){
  var form = layui.form;
  
  //监听提交
  form.on('submit(formDemo)', function(data){
    // layer.msg(JSON.stringify(data.field));
   $.post(
   		"/linkman/linkmanupdadd",
   		data.field,
   		function(res){
   			if(res.code==1){
	          layer.confirm(res.font, {
	            btn: ['重新修改', '跳转至列表'] //可以无限个按钮
	          }, function(index, layero){
	            history.go(0);
	          }, function(index){
	            location.href="/linkman/linkmanList";
	          });
        }
   		},
   		'json'
   	);
    return false;
  });
});
</script>
@endsection
