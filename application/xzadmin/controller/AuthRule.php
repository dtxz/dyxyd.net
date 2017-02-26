<?php
/**
 * Author: BradChen
 * Date: 2017/2/24/15:59
 * Description:权限管理控制器
 */
namespace app\xzadmin\controller;
use app\xzadmin\controller\Common;
use app\xzadmin\model\AuthRule as AuthRuleModel;
class AuthRule extends Common
{
    //权限列表
    public function ruleList(){
        $authRule = new AuthRuleModel();
        if(request()->isPost()){
            //权限规则排序
            $sorts = input('post.');
            foreach($sorts as $k => $v){
                $authRule->update(['id'=>$k,'sort'=>$v]);
            }
            $this->success('更新排序成功！',url('lst'));
            return;
        }
        //访问数据,获取无限级分类
        $authRuleRes = $authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);
        return view();
    }
    /*
     * 新增权限规则
     * */
    public function add(){
        if(request()->isPost()){
            //接收数据
            $data = input('post.');
            //获取上级权限的级别level
            $plevel = db('auth_rule')->where('id',$data['pid'])->field('level')->find();
            if($plevel){
                $data['level']=$plevel['level']+1;
            }else{
                $data['level']= 0 ;
            }
            $add = db('auth_rule')->insert($data);
            if($add){
                $this->success('添加权限成功',url('lst'));
            }else{
                $this->error('添加权限失败');
            }
            return;
        }
        $authRule = new AuthRuleModel();
        $authRuleRes = $authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);
        return view();
    }
    //编辑权限规则
    public function edit(){
        if(request()->isPost()){
            $updateData = input('post.');
            //获取上级权限的级别level和权限位置
            $plevel = db('auth_rule')->where('id', $updateData['pid'])->field('level')->find();
            if($plevel){
                $updateData['level']=$plevel['level']+1;
            }else{
                $updateData['level']= 0 ;
            }
            $updateRule = db('auth_rule')->update($updateData);
            if( $updateRule !== false){
                $this->success('权限规则修改成功',url('lst'));
            }else{
                $this->error('权限规则修改失败');
            }
            return;
        }
        $authRule = new AuthRuleModel();
        //获取无限级规则分类的方法
        $authRuleRes = $authRule->authRuleTree();
        //获取权限规则需要修改项的id
        $authRules = $authRule->find(input('id'));
        $this->assign(array(
            'authRuleRes'=>$authRuleRes,
            'authRules'=>$authRules,
        ));
        return view();
    }
    //删除权限规则
    public function del(){
        $authRule = new AuthRuleModel();
        $authRuleIds = $authRule->getchildrenid(input('id'));
        $authRuleIds[] =input('id');
        $delRule = AuthRuleModel::destroy($authRuleIds);
        if($delRule){
            $this->success('权限规则删除成功',url('lst'));
        }else{
            $this->error('权限规则删除失败');
        }
    }
}