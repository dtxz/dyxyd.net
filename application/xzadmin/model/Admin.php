<?php
/**
 * Author: BradChen
 * Date: 2017/2/4/23:33
 * Description:管理员模型
 */
namespace app\xzadmin\model;
use think\Model;
class Admin extends Model
{
    //添加管理员数据模型
    public function addadmin($data)
    {
        //参数如果为空或不是数组
        if(empty($data)||!is_array($data)){
            return false;
        }
        //如果是密码，则MD5加密
        if($data['password']){
            $data['password']=md5($data['password']);
        }
        $adminAuth = array();       //声明一个空数组，存放用户数据
        $adminAuth['username'] = $data['username'];
        $adminAuth['password'] = $data['password'];
        if($this->save($adminAuth)){
            $groupAccess['uid'] = $this->id;        //将获取到的管理员id保存成uid
            $groupAccess['group_id'] = $data['group_id'];       //将group_id也保存进去
            db('auth_group_access')->insert($groupAccess);      //将用户ID对应的UID和权限组GROUP_ID保存进表中
            return true;
        }else{
            return false;
        }
    }
    /*
     * 查询管理员模型
     * */
    public function selectadmin()
    {
        //查找admin表中所有数据，查询并分页
        return $this::paginate(10);
    }
    /*
     * 编辑管理员模型
     * */
    public function saveadmin($data,$admins){
        //判断用户名不能为空
        if(!$data['username']){
            return 'usernull';      //管理员用户名为空
        }
        //判断前端密码是否为空，如果为空，则保持密码不变
        if(!$data['password']){
            $data['password']=$admins['password'];
        }else{
            $data['password']=md5($data['password']);
        }
        db('auth_group_access')->where(array('uid'=>$data['id']))->update(['group_id'=>$data['group_id']]);      //修改管理员分组信息
        return $this::update(['username'=>$data['username'],'password'=>$data['password'],'id'=>$data['id']]);
    }
   /*
    *  删除管理员模型
    * */
    public function deladmin($id){
        if($id != 1){
            if($this::destroy($id)){
                return 'del_ok';
            }else{
                return 'del_error';
            }
        }else{
            return 'initialize_administrator';
        }

    }
    /*
     * 管理员登录模型
     * */
    public function login($data){
        $admin = Admin::getByUsername($data['username']);       //接收并根据传递的数据进行查询对比
        if($admin){
            if($admin['password']==md5($data['password'])){
                session('id',$admin['id']);     //写入session
                session('username',$admin['username']);
                return 'login_success';
            }else{
                return 'password_wrong';
            }
        }else{
            return 'user_null';     //用户不存在
        }
    }
}