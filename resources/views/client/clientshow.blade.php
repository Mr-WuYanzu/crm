@extends('layouts.app')
@section('title', 'layui后台大布局')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div style="padding:30px">
        <input type="hidden" id="_token" value="{{csrf_token()}}">
        <table class="layui-table">
            <thead>
                <tr>
                    <th>客户名称</th>
                    <th>客户类型</th>
                    <th>地区</th>
                    <th>销售方式</th>
                    <th>客户电话</th>
                    <th>电子邮件</th>
                    <th>客户来源</th>
                    <th>记录时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $k=>$v)
                <tr c_id="{{$v->c_id}}">
                    <td>{{$v->c_name}}</td>
                    <td>{{$v->c_type}}</td>
                    <td>{{$v->c_area}}</td>
                    <td>{{$v->c_model}}</td>
                    <td>{{$v->c_tel}}</td>
                    <td>{{$v->c_mail}}</td>
                    <td>{{$v->c_sale}}</td>
                    <td>{{$v->created_at}}</td>
                    <td>
                        <a href="/crm/public/index.php/client/clientupd/{{$v->c_id}}">编辑</a> /
                        <a href="javascript:;" class="clientdel">删除</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>

    <script>
        $(function () {
            layui.use(['form','layer'], function(){
                var form = layui.form;
                var layer = layui.layer;
                var _this=$(this);
                var _token=$("#_token").val();
                //删除
                $(document).on('click','.clientdel',function () {
                    var c_id=_this.parents('tr').attr('c_id');
                    layer.confirm("是否确认删除？",function(index){
                        $.post(
                            "clientdel",
                            {_token,_token,c_id:c_id},
                            function(res){
                                layer.msg(res.font,{icon:res.code});
                                if(res.code=1){
                                    history.go(0);
                                }
                            },
                            'json'
                        )
                        layer.close(index);
                    })
                })
            })
        })
    </script>
@endsection