<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"D:\dyxyd\public/../application/xzadmin\view\auth_rule\rulelist.html";i:1487687203;s:60:"D:\dyxyd\public/../application/xzadmin\view\Public\head.html";i:1488038962;s:60:"D:\dyxyd\public/../application/xzadmin\view\Public\left.html";i:1488035640;}*/ ?>
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
        <!--Dashboard-->
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
                    <a href="<?php echo url('admin/add'); ?>">
                                <span class="menu-text">
                                    新增管理员
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
                        <a href="<?php echo url('admin/lst'); ?>">系统</a>
                    </li>
                        <li class="active">权限规则列表</li>
                        </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Body -->
                <div class="page-body">
                    
    <button type="button" tooltip="添加规则" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href ='<?php echo url('add'); ?>'"> <i class="fa fa-plus"></i>
        添加权限规则
    </button>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="flip-scroll">
                        <form action="" method="post">
                        <table class="table table-bordered table-hover">
                            <thead class="">
                            <tr>
                                <th class="text-center" width="5%">ID</th>
                                <th class="text-center">权限名称</th>
                                <th class="text-center">控制器&方法</th>
                                <th class="text-center">权限级别</th>
                                <th class="text-center" width="8%">排序</th>
                                <th class="text-center" width="30%">操作</th>
                            </tr>
                            </thead>
                        <?php if(is_array($authRuleRes) || $authRuleRes instanceof \think\Collection): $i = 0; $__LIST__ = $authRuleRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$authRule): $mod = ($i % 2 );++$i;?>
                            <tbody>
                                <tr>
                                    <td align="center"><?php echo $authRule['id']; ?></td>
                                    <td align="left">
                                        <?php if($authRule['level']!=0)
                                        {echo '|';}
                                        echo  str_repeat('—',$authRule['level']*2) ;
                                    ?>
                                            <?php echo $authRule['title']; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $authRule['name']; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $authRule['level']+1; ?>级权限
                                    </td>
                                    <td align="center">
                                        <input type="text" name=<?php echo $authRule['id']; ?>" value="<?php echo $authRule['sort']; ?>" style="width:40px;text-align: center;"/>
                                    </td>
                                    <td align="center">
                                        <a href="<?php echo url('edit',array('id'=>$authRule['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                            <i class="fa fa-edit"></i> 编辑
                                        </a>
                                        <a href="#" onClick="warning('确实要删除吗','<?php echo url('del',array('id'=>$authRule['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                            <i class="fa fa-trash-o"></i> 删除
                                        </a>
                                    </td>
                                </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="width:40px;text-align: center;"><input class="btn btn-primary btn-sm shiny" type="submit" value="排序"></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                        </form>
                    </div>

                    <div>
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
    


</body></html>