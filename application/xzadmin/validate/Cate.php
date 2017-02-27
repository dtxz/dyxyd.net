<?php
/**
 * Author: BradChen
 * Date: 2017/2/26/22:37
 * Description:Cate后端验证
 */
namespace app\xzadmin\validate;
use think\Validate;

class Cate extends Validate
{
    /*验证规则*/
    protected $rule = [
        'catename' => 'require|max:50|unique:cate',
    ];
    /*验证提示信息*/
    protected $message = [
        'catename.unique'=>'该栏目已经存在，请核对后再发布',
        'catename.require'=>'栏目不能为空',
        'catename.max'=>'栏目标题太长，不能超过50个字符',

    ];
    /*验证场景*/
    protected $scene=[
        'add'=>['catename'],
        'edit'=>['catename'],
    ];
}