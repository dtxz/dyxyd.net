<?php
/**
 * Author: BradChen
 * Date: 2017/2/24/15:23
 * Description:管理员分组控制器
 */
namespace app\xzadmin\controller;
use app\xzadmin\controller\Common;
use app\xzadmin\model\AuthGroup as AuthGroupModel;
class AuthGroup extends Common{
    public function groupList(){
        //访问数据
        $authGroupRes = AuthGroupModel::paginate(10);
        $this->assign('authGroupRes',$authGroupRes);
        return view();
    }
   /*
    *  新增用户组的操作方法
    * */
    public function add(){
        //接收数据并判断
        if(request()->isPost()){
            $data = input('post.');
            /*判断权限rule是否存在*/
            if($data['rules']){
                $data['rules'] = implode(',',$data['rules']);
            }
            /*新增权限组，并给出结果*/
            $add = db('auth_group')->insert($data);
            if($add){
                $this->success('添加用户权限组成功',url('groupList'));
            }else{
                $this->error('添加用户权限组失败');
            }
            return;
        }
        $authRule = new \app\xzadmin\model\AuthRule();
        $authRuleRes = $authRule->authRuleTree();        //引用无限级权限分类方法
        $this->assign('authRuleRes',$authRuleRes);
        return view();
    }
    /*
    * 编辑用户组
    * */
    public function edit(){
        if(request()->isPost()){
            $data = input('post.');     //接收数据
            /*判断权限rules是否存在*/
            if($data['rules']){
                $data['rules']=implode(',',$data['rules']);
            }
            $_data=array();
            foreach($data as $k=>$v){
                $_data[]=$k;
            }
            if(!in_array('status',$_data)){
                $data['status']=0;
            }
            $save = db('auth_group')->update($data);
            if($save!==false){
                $this->success('修改用户组成功',url('lst'));
            }else{
                $this->error('修改用户组失败！');
            }
            return;
        }
        $authgroups = db('auth_group')->find(input('id'));
        $this->assign('authgroups',$authgroups);
        //实例化AuthRule模型类
        $authRule = new \app\xzadmin\model\AuthRule();
        //引用无限级权限分类方法
        $authRuleRes = $authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);
        return view();
        }
    /*
     * 删除用户组
     * */
    public function del(){
        $del = db('auth_group')->delete(input('id'));
        if($del){
            $this->success('删除用户组成功',url('lst'));
        }else{
            $this->error('删除用户组失败');
        }
    }

}