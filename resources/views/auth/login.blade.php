{{--<form method="POST" action="/auth/login">--}}
    {{--{!! csrf_field() !!}--}}

    {{--<div>--}}
        {{--Email--}}
        {{--<input type="email" name="email" value="{{ old('email') }}">--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--密码--}}
        {{--<input type="password" name="password" id="password">--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--<input type="checkbox" name="remember"> 记住我--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--<button type="submit">登录</button>--}}
    {{--</div>--}}
{{--</form>--}}
{{--<style>--}}
    {{--.login-page {--}}
        {{--width: 400px;--}}
        {{--margin: 0 auto;--}}
    {{--}--}}
    {{--.form-bg{--}}
        {{--background: #00b4ef;--}}
    {{--}--}}
    {{--.form-horizontal{--}}
        {{--background: #fff;--}}
        {{--padding-bottom: 40px;--}}
        {{--border-radius: 15px;--}}
        {{--text-align: center;--}}
    {{--}--}}
    {{--.form-horizontal .heading{--}}
        {{--display: block;--}}
        {{--font-size: 35px;--}}
        {{--font-weight: 700;--}}
        {{--padding: 35px 0;--}}
        {{--border-bottom: 1px solid #f0f0f0;--}}
        {{--margin-bottom: 30px;--}}
    {{--}--}}
    {{--.form-horizontal .form-group{--}}
        {{--padding: 0 40px;--}}
        {{--margin: 0 0 25px 0;--}}
        {{--position: relative;--}}
    {{--}--}}
    {{--.form-horizontal .form-control{--}}
        {{--background: #f0f0f0;--}}
        {{--border: none;--}}
        {{--border-radius: 20px;--}}
        {{--box-shadow: none;--}}
        {{--padding: 0 20px 0 45px;--}}
        {{--height: 40px;--}}
        {{--transition: all 0.3s ease 0s;--}}
    {{--}--}}
    {{--.form-horizontal .form-control:focus{--}}
        {{--background: #e0e0e0;--}}
        {{--box-shadow: none;--}}
        {{--outline: 0 none;--}}
    {{--}--}}
    {{--.form-horizontal .form-group i{--}}
        {{--position: absolute;--}}
        {{--top: 12px;--}}
        {{--left: 60px;--}}
        {{--font-size: 17px;--}}
        {{--color: #c8c8c8;--}}
        {{--transition : all 0.5s ease 0s;--}}
    {{--}--}}
    {{--.form-horizontal .form-control:focus + i{--}}
        {{--color: #00b4ef;--}}
    {{--}--}}
    {{--.form-horizontal .fa-question-circle{--}}
        {{--display: inline-block;--}}
        {{--position: absolute;--}}
        {{--top: 12px;--}}
        {{--right: 60px;--}}
        {{--font-size: 20px;--}}
        {{--color: #808080;--}}
        {{--transition: all 0.5s ease 0s;--}}
    {{--}--}}
    {{--.form-horizontal .fa-question-circle:hover{--}}
        {{--color: #000;--}}
    {{--}--}}
    {{--.form-horizontal .main-checkbox{--}}
        {{--float: left;--}}
        {{--width: 20px;--}}
        {{--height: 20px;--}}
        {{--background: #11a3fc;--}}
        {{--border-radius: 50%;--}}
        {{--position: relative;--}}
        {{--margin: 5px 0 0 5px;--}}
        {{--border: 1px solid #11a3fc;--}}
    {{--}--}}
    {{--.form-horizontal .main-checkbox label{--}}
        {{--width: 20px;--}}
        {{--height: 20px;--}}
        {{--position: absolute;--}}
        {{--top: 0;--}}
        {{--left: 0;--}}
        {{--cursor: pointer;--}}
    {{--}--}}
    {{--.form-horizontal .main-checkbox label:after{--}}
        {{--content: "";--}}
        {{--width: 10px;--}}
        {{--height: 5px;--}}
        {{--position: absolute;--}}
        {{--top: 5px;--}}
        {{--left: 4px;--}}
        {{--border: 3px solid #fff;--}}
        {{--border-top: none;--}}
        {{--border-right: none;--}}
        {{--background: transparent;--}}
        {{--opacity: 0;--}}
        {{---webkit-transform: rotate(-45deg);--}}
        {{--transform: rotate(-45deg);--}}
    {{--}--}}
    {{--.form-horizontal .main-checkbox input[type=checkbox]{--}}
        {{--visibility: hidden;--}}
    {{--}--}}
    {{--.form-horizontal .main-checkbox input[type=checkbox]:checked + label:after{--}}
        {{--opacity: 1;--}}
    {{--}--}}
    {{--.form-horizontal .text{--}}
        {{--float: left;--}}
        {{--margin-left: 7px;--}}
        {{--line-height: 20px;--}}
        {{--padding-top: 5px;--}}
        {{--text-transform: capitalize;--}}
    {{--}--}}
    {{--.form-horizontal .btn{--}}
        {{--float: right;--}}
        {{--font-size: 14px;--}}
        {{--color: #fff;--}}
        {{--background: #00b4ef;--}}
        {{--border-radius: 30px;--}}
        {{--padding: 10px 25px;--}}
        {{--border: none;--}}
        {{--text-transform: capitalize;--}}
        {{--transition: all 0.5s ease 0s;--}}
    {{--}--}}
    {{--@media only screen and (max-width: 479px){--}}
        {{--.form-horizontal .form-group{--}}
            {{--padding: 0 25px;--}}
        {{--}--}}
        {{--.form-horizontal .form-group i{--}}
            {{--left: 45px;--}}
        {{--}--}}
        {{--.form-horizontal .btn{--}}
            {{--padding: 10px 20px;--}}
        {{--}--}}
    {{--}--}}
{{--</style>--}}
{{--<div class="login-page">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-offset-3 col-md-6">--}}
                {{--<form class="form-horizontal">--}}
                    {{--<span class="heading">用户登录</span>--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="email" class="form-control" id="inputEmail3" placeholder="用户名或电子邮件">--}}
                        {{--<i class="fa fa-user"></i>--}}
                    {{--</div>--}}
                    {{--<div class="form-group help">--}}
                        {{--<input type="password" class="form-control" id="inputPassword3" placeholder="密　码">--}}
                        {{--<i class="fa fa-lock"></i>--}}
                        {{--<a href="#" class="fa fa-question-circle"></a>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<div class="main-checkbox">--}}
                            {{--<input type="checkbox" value="None" id="checkbox1" name="check"/>--}}
                            {{--<label for="checkbox1"></label>--}}
                        {{--</div>--}}
                        {{--<span class="text">Remember me</span>--}}
                        {{--<button type="submit" class="btn btn-default">登录</button>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


        <!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>登录页面</title>

    {{--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">--}}

{{--    <link rel='stylesheet' href='{{ URL::asset('libs/css/jquery-ui.css') }}'>--}}
    <link rel='stylesheet prefetch' href='{{ URL::asset('libs/css/bootstrap.min.css') }}'>

    <link rel="stylesheet" href="{{ URL::asset('libs/css/style.css') }}" media="screen" type="text/css" />

    <script src="{{ URL::asset('libs/js/modernizr.js') }}"></script>

</head>


<body class="login-page">
<div class="login-form">

    <div class="login-content">

        {{--<div class="form-login-error">--}}
            {{--<h3>Invalid login</h3>--}}
            {{--<p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>--}}
        {{--</div>--}}

        <form method="post" role="form" id="form_login" action="">
            {!! csrf_field() !!}
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </div>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-key"></i>
                    </div>

                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
                </div>
            </div>

            {{--<div class="form-group">--}}
                {{--<div style="float: left">--}}
                    {{--<input type="checkbox"><span style="color: #ffffff; line-height: 22px; display: inline-block">记住密码</span>--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="form-group">
                <button type="" class="btn btn-primary btn-block btn-login">
                    <i class="fa fa-sign-in"></i>
                    Login In
                </button>
            </div>

            <!-- Implemented in v1.1.4 -->
            {{--<div class="form-group">--}}
                {{--<a href="#"><span style="color: #ffffff; float: left">忘记密码</span></a>--}}
                {{--<a href="#"><span style="color: #ffffff; float: right; margin-right: 0px">注册</span></a>--}}
            {{--</div>--}}

        </form>

        {{--<div style="text-align:center;clear:both;">--}}
            {{--<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>--}}
            {{--<script src="/follow.js" type="text/javascript"></script>--}}
        {{--</div>--}}

    </div>

</div>


{{--<script src='{{ URL::asset('libs/js/jquery_and_jqueryui.js') }}js/jquery_and_jqueryui.js'></script>--}}

</body>

</html>



