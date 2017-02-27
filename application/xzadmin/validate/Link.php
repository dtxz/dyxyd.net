<?php
/**
 * Author: BradChen
 * Date: 2017/2/27/22:19
 * Description:友情链接后台验证
 */
namespace app\xzadmin\validate;
use think\Validate;

class Link extends Validate
{
    //验证规则
    protected $rule = [
        'title'  =>  'require|max:25|unique:link',
        'url' =>  'url|require|unique:link',
    ];
    //验证提示星系
    protected $message = [
        'title.unique'=>'该友情链接已经存在',
        'title.require'=>'链接名称不能为空',
        'url.require'=>'链接地址不能为空',
        'url.url'=>'链接地址格式错误',
        'url.unique'=>'该友情链接已经存在'
    ];
    protected $scene=[
        'add'=>['title','url'],
        'edit'=>['title','url'],
    ];
}