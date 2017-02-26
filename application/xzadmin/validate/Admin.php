<?php
/**
 * Author: BradChen
 * Date: 2017/2/16/12:45
 * Description:后台验证
 */
namespace app\xzadmin\validate;
use think\Validate;
class Admin extends Validate
{
    //验证规则
    protected $rule = [
        'username' => 'require|max:50|unique:admin',
        'password' => 'require|min:6'
    ];
    //验证提示信息
    protected $message = [
        'username.unique'=>'该管理员已经存在，请核对后再添加',
        'username.require'=>'管理员用户名不能为空',
        'username.max'=>'管理员用户名太长，不能超过50个字符',
        'password.require'=>'管理员密码不能为空',
        'password.min'=>'管理员密码不能少于6个字符',
    ];
    protected $scene=[
        'add'=>['username','password'],
        'edit'=>['username','password'=>'min:6'],
    ];
}