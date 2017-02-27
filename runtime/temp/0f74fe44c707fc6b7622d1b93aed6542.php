<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"D:\dyxyd.net\public/../application/xzadmin\view\cate\edit.html";i:1487320793;s:64:"D:\dyxyd.net\public/../application/xzadmin\view\Public\head.html";i:1488180210;s:64:"D:\dyxyd.net\public/../application/xzadmin\view\Public\left.html";i:1488120388;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>新一代重运网站后台管理系统</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
    <link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
    <link href="__ADMIN__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__ADMIN__/style/demo.css" rel="stylesheet">
    <link href="__ADMIN__/style/typicons.css" rel="stylesheet">
    <link href="__ADMIN__/style/animate.css" rel="stylesheet">
    <!--ueditor-->
    <script src="__ADMIN__/ueditor/ueditor.config.js" ></script>
    <script src="__ADMIN__/ueditor/ueditor.all.min.js" ></script>
    <script src="__ADMIN__/ueditor/lang/zh-cn/zh-cn.js" ></script>
</head>
<body>
<!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="__ADMIN__/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__ADMIN__/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/loginout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>\think\Request::instance()->session('id'))); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">输入需要搜索的关键词</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--管理员栏目列表-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/showlist'); ?>">
                            <span class="menu-text">
                                管理列表
                            </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('AuthGroup/groupList'); ?>">
                                <span class="menu-text">
                                    管理员权限组
                                </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('auth_rule/ruleList'); ?>">
                            <span class="menu-text">
                                权限列表
                            </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <!--栏目分类管理列表-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-folder"></i>
                <span class="menu-text">栏目分类管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cate/cateList'); ?>">
                        <span class="menu-text">
                            栏目分类列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <!--XXX列表-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文档</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            文章列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            配置
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- /Sidebar Menu -->
</div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="#">系统</a>
                    </li>
                    <li>
                        <a href="<?php echo url('lst'); ?>">栏目管理</a>
                    </li>
                    <li class="active">修改栏目</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">修改栏目</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" action="" method="post">
                                        <input type="hidden" name="id" value="<?php echo $cates['id']; ?>" />
                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"> 上级栏目</label>
                                            <div class="col-sm-6">
                                                <select name="pid">
                                                    <option value="0">顶级栏目</option>
                                                    <?php if(is_array($cateres) || $cateres instanceof \think\Collection): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                                    <option <?php if($cates['pid'] == $cate['id']): ?>selected="selected"<?php endif; ?>
                                                            value="<?php echo $cate['id']; ?>">
                                                        <?php if($cate['level'] != 0): ?>
                                                        |
                                                        <?php endif; ?>
                                                        <?php echo str_repeat('----',$cate['level'])?>
                                                        <?php echo $cate['catename']; ?>
                                                    </option>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">栏目名称</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="catename" value="<?php echo $cates['catename']; ?>" name="catename"  type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">栏目关键词</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="keywords"  name="keywords"  type="text" value="<?php echo $cates['keywords']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">栏目概要</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" id="desc"  name="desc"><?php echo $cates['desc']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">栏目类型</label>
                                            <div class="col-sm-6">
                                                <div class="radio">
                                                    <label>
                                                        <input <?php if($cates['type'] == 1): ?> checked="checked" <?php endif; ?> name="type" value="1" class="incerted" type="radio">
                                                        <span class="text">文章列表</span>
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input <?php if($cates['type'] == 2): ?> checked="checked" <?php endif; ?> name="type" value="2" class="incerted" type="radio">
                                                        <span class="text">单页栏目</span>
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input <?php if($cates['type'] == 3): ?> checked="checked" <?php endif; ?> name="type" value="3" class="incerted" type="radio">
                                                        <span class="text">图片列表</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">单页栏目内容</label>
                                            <div class="col-sm-6">
                                                <textarea id="content"  name="content"><?php echo $cates['content']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">保存信息</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
</div>

<!--Basic Scripts-->
<script src="__ADMIN__/style/jquery_002.js"></script>
<script src="__ADMIN__/style/bootstrap.js"></script>
<script src="__ADMIN__/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__ADMIN__/style/beyond.js"></script>
<script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:650,initialFrameHeight:300,});
</script>


</body></html>