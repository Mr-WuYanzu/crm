@extends('layouts.app')
@section('title', 'layui后台大布局')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div style="padding:30px">
        <form class="layui-form" onsubmit="return false">
            @csrf
            <div class="layui-form-item">
                <label class="layui-form-label">其他客服是否可以查看</label>
                <div class="layui-input-block">
                    <input type="radio" name="share" value="1" title="是">
                    <input type="radio" name="share" value="2" title="否" checked>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">客户名称</label>
                <div class="layui-input-block">
                    <input type="text" name="c_name" required  lay-verify="required"  class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">客户编码</label>
                <div class="layui-input-block">
                    <input type="text" name="c_coding"  class="layui-input">
                </div>
                {{--<div class="layui-form-mid layui-word-aux">辅助文字</div>--}}
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">客户简称</label>
                <div class="layui-input-block">
                    <input type="text" name="c_short" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">客户电话</label>
                <div class="layui-input-block">
                    <input type="text" name="c_tel" required  lay-verify="required"  class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">网址</label>
                <div class="layui-input-block">
                    <input type="text" name="c_url" required  lay-verify="required"  class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">电子邮件</label>
                <div class="layui-input-block">
                    <input type="text" name="c_mail" required  lay-verify="required"  class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">地区</label>
                <div class="layui-input-block">
                    <select name="c_area" lay-verify="required">
                        <option value="">--请选择--</option>
                        <option value="北京">北京</option>
                        <option value="上海">上海</option>
                        <option value="山东">山东</option>
                        <option value="深圳">深圳</option>
                        <option value="河北">河北</option>
                        <option value="天津">天津</option>
                        <option value="广州">广州</option>
                        <option value="山西">山西</option>
                        <option value="湖南">湖南</option>
                        <option value="江苏">江苏</option>
                    </select>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">邮政编码</label>
                <div class="layui-input-block">
                    <input type="text" name="mail_coding" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">详细地址</label>
                <div class="layui-input-block">
                    <input type="text" name="c_detail" required  lay-verify="required"  class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">客户类型</label>
                <div class="layui-input-block">
                    <select name="c_type" lay-verify="required">
                        <option value="">--请选择--</option>
                        <option value="非客户">非客户</option>
                        <option value="潜在客户">潜在客户</option>
                        <option value="目标客户">目标客户</option>
                        <option value="现实客户">现实客户</option>
                        <option value="流失客户">流失客户</option>
                    </select>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">客户来源</label>
                <div class="layui-input-block">
                    <select name="c_sale" lay-verify="required">
                        <option value="">--请选择--</option>
                        <option value="网络">网络</option>
                        <option value="报纸">报纸</option>
                        <option value="电话">电话</option>
                    </select>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">销售方式</label>
                <div class="layui-input-block">
                    <select name="c_model" lay-verify="required">
                        <option value="">--请选择--</option>
                        <option value="实体销售">实体销售</option>
                        <option value="电话销售">电话销售</option>
                        <option value="网络销售">网络销售</option>
                    </select>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">企业概况</label>
                <div class="layui-input-block">
                    <input type="text" name="c_survey" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">企业属性</label>
                <div class="layui-input-block">
                    <input type="text" name="c_property" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">企业性质</label>
                <div class="layui-input-block">
                    <input type="text" name="c_nature" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">企业描述</label>
                <div class="layui-input-block">
                    <input type="text" name="c_describe" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">备注</label>
                <div class="layui-input-block">
                    <input type="text" name="c_remark" class="layui-input">
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
                    $.post(
                        "clientadddo",
                        data.field,
                        function(res){
                            if(res.code==1){
                                layer.open({
                                    content:res.font
                                    ,btn:['继续添加','进入展示']
                                    ,yes:function(index,layero){
                                        location.href="clientadd"
                                    },
                                    btn2:function(index,layero){
                                        location.href="clientshow"
                                    }
                                });
                            }else{
                                layer.msg(res.font, {icon: res.code});
                                return false;
                            }
                        },
                        'json'
                    )
                    return false;
                });
            });
        </script>
    </div>
@endsection