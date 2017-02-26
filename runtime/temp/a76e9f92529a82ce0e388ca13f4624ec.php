<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"D:\dyxyd\public/../application/xzadmin\view\login\login.html";i:1487319128;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
    <link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet">
    <link href="__ADMIN__/style/demo.css" rel="stylesheet">
    <link href="__ADMIN__/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">管理员登录</div>
                <div class="loginbox-textbox">
                    <input value="" class="form-control" placeholder="管理员名称" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="管理员密码" name="password" type="password">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="请输入下方验证码" name="captcha" type="text">
                    <div class="text-center" style="margin-top: 5px">
                        <img src="<?php echo captcha_src(); ?>"  onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();"  alter="captcha"  style="cursor:pointer;">
                    </div>
                </div>
                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="登录" type="submit">
                </div>
            </div>
                <div class="logobox">
                    <p class="text-center"></p>
                </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="__ADMIN__/style/jquery.js"></script>
    <script src="__ADMIN__/style/bootstrap.js"></script>
    <script src="__ADMIN__/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="__ADMIN__/style/beyond.js"></script>




</body><!--Body Ends--></html>