<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="/login/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/login/css/demo.css" />
    <!--必要样式-->
    <link rel="stylesheet" type="text/css" href="/login/css/component.css" />
    <link rel="stylesheet" href="/layui/css/layui.css">
    <script src="/layui/layui.js"></script>
    <!--[if IE]>
    <script src="__STATIC__/admin/login/js/html5.js"></script>
    <![endif]-->
    <style>
        input::-webkit-input-placeholder{
            color:rgba(0, 0, 0, 0.726);
        }
        input::-moz-placeholder{   /* Mozilla Firefox 19+ */
            color:rgba(0, 0, 0, 0.726);
        }
        input:-moz-placeholder{    /* Mozilla Firefox 4 to 18 */
            color:rgba(0, 0, 0, 0.726);
        }
        input:-ms-input-placeholder{  /* Internet Explorer 10-11 */
            color:rgba(0, 0, 0, 0.726);
        }
    </style>
</head>
<body>
<div class="container demo-1">
    <div class="content">
        <div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <div class="logo_box">
                <h3>登录</h3>
                <form  method="post"  class="layui-form">
                    <input type="hidden" id="token" value="{{csrf_token()}}">
                    <div class="input_outer">
                        <span class="u_user"></span>
                        <input  name="admin_name" id="user_name" class="text" lay-verifyt="required" style="color: #000000 !important" type="text" placeholder="请输入账户">
                    </div>
                    <div class="input_outer">
                        <span class="us_uer"></span>
                        <input  name="admin_pwd" id="user_pwd" class="text" lay-verifyt="required" style="color: #000000 !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
                    </div>
                    <div id="login" class="mb2">
                        <a class="act-but submit" lay-submit lay-filter="sub" href="javascript:;"  style="color: #FFFFFF" id="login">登录</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- /container -->
<script src="/login/js/TweenLite.min.js"></script>
<script src="/login/js/EasePack.min.js"></script>
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/login/js/rAF.js"></script>
<script src="/login/js/demo-1.js"></script>
<script src="/login/js/Longin.js"></script>
<div style="text-align:center;">
</div>
</body>
</html>

<script>
    $(function(){
        layui.use(['form','layer'],function(){
            $('#login').click(function(){
                var _token=$('#token').val();
                var user_name=$('#user_name').val();
                var user_pwd=$('#user_pwd').val();
                if(user_name==''){
                    layer.msg('管理员账户名必填',{icon:2});
                    return false;
                }else if(user_pwd==''){
                    layer.msg('密码必填',{icon:2});
                    return false
                }
                var user_pwd=$('#user_pwd').val();
                $.post(
                    "/login/logindo",
                    {_token:_token,user_name:user_name,user_pwd:user_pwd},
                    function(res){
                        if(res.code==1){
                            layer.msg(res.font,{icon:res.code,time:1500},function(){
                                location.href="/";
                            });
                        }else{
                            layer.msg(res.font,{icon:res.code})
                        }
                    },
                    'json'
                );
            })
        })
    })
</script>
