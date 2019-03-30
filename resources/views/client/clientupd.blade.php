@extends('layouts.app')
@section('title', 'layui后台大布局')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div style="padding:30px">
        <form class="layui-form" onsubmit="return false">
            <input type="hidden" name="c_id" value="{{$data->c_id}}">
            @csrf
            <div class="layui-form-item">
                <label class="layui-form-label">客户名称</label>
                <div class="layui-input-block">
                    <input type="text" name="c_name" value="{{$data->c_name}}" required  lay-verify="required" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">客户类型</label>
                <div class="layui-input-block">
                    <select name="c_type" lay-verify="required">
                        @if ($data->c_type == '非客户')
                            <option value="">--请选择--</option>
                            <option value="非客户" selected>非客户</option>
                            <option value="潜在客户">潜在客户</option>
                            <option value="目标客户">目标客户</option>
                            <option value="现实客户">现实客户</option>
                            <option value="流失客户">流失客户</option>
                        @elseif($data->c_type == "潜在客户")
                            <option value="">--请选择--</option>
                            <option value="非客户">非客户</option>
                            <option value="潜在客户" selected>潜在客户</option>
                            <option value="目标客户">目标客户</option>
                            <option value="现实客户">现实客户</option>
                            <option value="流失客户">流失客户</option>
                        @elseif($data->c_type == "目标客户")
                            <option value="">--请选择--</option>
                            <option value="非客户">非客户</option>
                            <option value="潜在客户">潜在客户</option>
                            <option value="目标客户" selected>目标客户</option>
                            <option value="现实客户">现实客户</option>
                            <option value="流失客户">流失客户</option>
                        @elseif($data->c_type == "现实客户")
                            <option value="">--请选择--</option>
                            <option value="非客户">非客户</option>
                            <option value="潜在客户">潜在客户</option>
                            <option value="目标客户">目标客户</option>
                            <option value="现实客户" selected>现实客户</option>
                            <option value="流失客户">流失客户</option>
                        @else
                            <option value="">--请选择--</option>
                            <option value="非客户">非客户</option>
                            <option value="潜在客户">潜在客户</option>
                            <option value="目标客户">目标客户</option>
                            <option value="现实客户">现实客户</option>
                            <option value="流失客户" selected>流失客户</option>
                        @endif
                    </select>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">地区</label>
                <div class="layui-input-block">
                    <select name="c_area" lay-verify="required">
                        @if ($data->c_area == '北京')
                            <option value="">--请选择--</option>
                            <option value="北京" selected>北京</option>
                            <option value="上海">上海</option>
                            <option value="山东">山东</option>
                            <option value="深圳">深圳</option>
                            <option value="河北">河北</option>
                        @elseif($data->c_area == "上海")
                            <option value="">--请选择--</option>
                            <option value="北京">北京</option>
                            <option value="上海" selected>上海</option>
                            <option value="山东">山东</option>
                            <option value="深圳">深圳</option>
                            <option value="河北">河北</option>
                        @elseif($data->c_area == "山东")
                            <option value="">--请选择--</option>
                            <option value="北京">北京</option>
                            <option value="上海">上海</option>
                            <option value="山东" selected>山东</option>
                            <option value="深圳">深圳</option>
                            <option value="河北">河北</option>
                        @elseif($data->c_area == "深圳")
                            <option value="">--请选择--</option>
                            <option value="北京">北京</option>
                            <option value="上海">上海</option>
                            <option value="山东">山东</option>
                            <option value="深圳" selected>深圳</option>
                            <option value="河北">河北</option>
                        @elseif($data->c_area == "河北")
                            <option value="">--请选择--</option>
                            <option value="北京">北京</option>
                            <option value="上海">上海</option>
                            <option value="山东">山东</option>
                            <option value="深圳">深圳</option>
                            <option value="河北" selected>河北</option>
                        @endif
                    </select>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">销售方式</label>
                <div class="layui-input-block">
                    <select name="c_model" lay-verify="required">
                        @if ($data->c_model == '实体销售')
                            <option value="">--请选择--</option>
                            <option value="实体销售" selected>实体销售</option>
                            <option value="电话销售">电话销售</option>
                            <option value="网络销售">网络销售</option>
                        @elseif($data->c_model == "电话销售")
                            <option value="">--请选择--</option>
                            <option value="实体销售">实体销售</option>
                            <option value="电话销售" selected>电话销售</option>
                            <option value="网络销售">网络销售</option>
                        @elseif($data->c_model == "网络销售")
                            <option value="">--请选择--</option>
                            <option value="实体销售">实体销售</option>
                            <option value="电话销售">电话销售</option>
                            <option value="网络销售" selected>网络销售</option>
                        @endif
                    </select>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">客户电话</label>
                <div class="layui-input-block">
                    <input type="text" name="c_tel" value="{{$data->c_tel}}" required  lay-verify="required"  class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">网址</label>
                <div class="layui-input-block">
                    <input type="text" name="c_url" value="{{$data->c_url}}" required  lay-verify="required"  class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">电子邮件</label>
                <div class="layui-input-block">
                    <input type="text" name="c_mail" value="{{$data->c_mail}}" required  lay-verify="required"  class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">客户来源</label>
                <div class="layui-input-block">
                    <select name="c_sale" lay-verify="required">
                        @if ($data->c_sale == "网络")
                            <option value="">--请选择--</option>
                            <option value="网络" selected>网络</option>
                            <option value="报纸">报纸</option>
                            <option value="电话">电话</option>
                        @elseif($data->c_sale == "报纸")
                            <option value="">--请选择--</option>
                            <option value="网络">网络</option>
                            <option value="报纸" selected>报纸</option>
                            <option value="电话">电话</option>
                        @elseif($data->c_sale == "电话")
                            <option value="">--请选择--</option>
                            <option value="网络">网络</option>
                            <option value="报纸">报纸</option>
                            <option value="电话" selected>电话</option>
                        @endif
                    </select>
                </div>
            </div>
            
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
        </form>

        <script>
            //Demo
            layui.use(['form','layer'], function(){
                var form = layui.form;
                var layer = layui.layer;
                //监听提交
                form.on('submit(formDemo)', function(data){
                    // console.log(data);
                    $.post(
                        "/crm/public/index.php/client/clientupddo",
                        data.field,
                        function(res){
                            layer.msg(res.font, {icon: res.code});
                            if(res.code==1){
                               location.href="clientshow";
                            }
                        },
                        'json'
                    )
                });
            });
        </script>
    </div>
@endsection