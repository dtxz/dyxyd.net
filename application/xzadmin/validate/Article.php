<?php
/**
 * Author: BradChen
 * Date: 2017/2/26/22:37
 * Description:Cate后端验证
 */
namespace app\xzadmin\validate;
use think\Validate;

class Article extends Validate
{
    /*验证规则*/
    protected $rule = [
        'title' => 'require|max:150|unique:article',
        'cateid'=>'require',
        'content'=>'require',
        'desc' => 'require|max:150'
    ];
    /*验证提示信息*/
    protected $message = [
        'title.unique'=>'该文章标题已经存在，请核对后再发布',
        'title.require'=>'文章标题不能为空',
        'title.max'=>'文章标题太长，不能超过100个字符',
        'cateid.require'=>'栏目不能为空',
        'content.require'=>  '文章内容不能为空',
        'desc.require'=>  '文章概要不能为空',
        'desc.max'=>  '文章概要不能超过150个字符',

    ];
    /*验证场景*/
    protected $scene=[
        'add'=>['title','cateid','content','desc'],
        'edit'=>['title','content','desc'],
    ];
}