<?php
/**
 * Author: BradChen
 * Date: 2017/2/17/12:45
 * Description:
 */
namespace app\xzadmin\validate;
use think\Validate;

class Conf extends Validate
{
    //验证规则
    protected $rule = [
        'cnname'  =>  'require|max:30|unique:conf',
        'enname'  =>  'require|max:30|unique:conf',
        'type'  =>  'require',
    ];
    //验证提示信息
    protected $message = [
        'cnname.unique'=>'该中文名称已经存在，请核对后再发布',
        'cnname.require'=>'配置中文名称不能为空',
        'cnname.max'=>'配置中文名太长，不能超过30个字符',
        'enname.unique'=>'该英文名称已经存在，请核对后再发布',
        'enname.require'=>'配置英文名称不能为空',
        'enname.max'=>'配置英文名太长，不能超过30个字符',
        'type.require'  =>  '配置类型不能为空',

    ];
    protected $scene = [
        'add' => ['cnname','enname','type'],
        'edit' => ['cnname','enname'],
    ];
}