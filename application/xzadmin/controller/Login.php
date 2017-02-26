<?php
/**
 * Author: BradChen
 * Date: 2017/2/25/15:04
 * Description:用户登录控制器
 */
namespace app\xzadmin\controller;
use app\xzadmin\model\Admin;
use think\Controller;

class Login extends Controller
{
    public function index(){
        if(request()->isPost()){
            $this->check(input('captcha'));
            //用户名密码对比
            $admin = new Admin();
            $login_status = $admin->login(input('post.'));
            if($login_status=="user_null"){
                $this->error('用户不存在');
            }
            if($login_status == 'login_success'){
                $this->success('登录成功','index/index');
            }
            if($login_status=='password_wrong'){
                $this->error('登录密码错误');
            }
            return;
        }
        return view('login');
    }
    /*
     * 登录验证码
     * */
    public function check($code=''){
        $captcha = new \think\captcha\Captcha();
        if(!$captcha->check($code)){
            $this->error('验证码错误');
        }else{
            return true;
        }
    }
}
