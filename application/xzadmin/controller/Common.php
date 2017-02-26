<?php
/**
 * Author: BradChen
 * Date: 2017/2/16/13:13
 * Description:
 */
namespace app\xzadmin\controller;
use think\Controller;
use think\Request;

class Common extends Controller
{
    public function _initialize(){
        if(!session('id')||!session('username')){
            $this->error('请先登录系统',url('login/index'));
        }
        $auth = new Auth();
        $request = Request::instance();     //获取当前控制器和当前操作方法
        $con = $request->controller();
        $action = $request->action();
        $name = $con.'/'.$action;
        $notCheck = array('Index/index,Admin/loginout');
        if(session('id')!=1){
            if(!in_array($name,$notCheck)){
                if(!$auth->check($name,session('id'))){
                    $this->error('你没有访问权限权限',url('Index/index'));
                }
            }
        }
    }
}