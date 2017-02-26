<?php
namespace app\xzadmin\controller;
use app\xzadmin\controller\Common;
use app\xzadmin\model\Admin as AdminModel;
class Admin extends Common
{
    /*
     * 管理员列表控制器
     * */
    public function showlist()
    {
        $auth = new Auth();
        $admin = new AdminModel;
        $result = $admin->selectadmin();        //调用模型中的查询方法
        $this->assign('result',$result);        //分配模版
        foreach($result as $k => $v ){          //遍历查询管理员用户组
            $_groupTitle = $auth->getGroups($v['id']);
            $groupTitle = $_groupTitle[0]['title'];
            $v['groupTitle'] = $groupTitle;
        }
        $this->assign('result',$result);
        return $this->fetch();
    }
    /*
     * 添加、新增管理员控制器
     * */
    public function add()
    {
        $admin = new AdminModel();
        if(request()->isPost()){
            $data = input('post.');
            /*后端规则验证*/
            $validate = \think\Loader::validate('admin');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            if($admin ->addadmin($data)){      //接收到数据并使用模型中添加数据的方法添加，并且给出结果
                $this->success('管理员添加成功',url('showlist'));
            }else{
                $this->error('管理员添加失败',url('showlist'));
            }
            return;
        }
        $authGroupRes = db('auth_group')->select();     //查询用户权限分组表
        $this->assign('authGroupRes',$authGroupRes);    //分配前端模版
        return view();
    }
    /*
     * 编辑管理员控制器
     * */
    public function edit($id)          //传递用户id带该方法
    {
        $admins = db('admin')->find($id);       //查询到id后接收并处理
        if(request()->isPost()){
            $data = input('post.');
            /*后端场景验证*/
            $validate = \think\Loader::validate('admin');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $admin = new AdminModel();
            $save_status = $admin ->saveadmin($data,$admins);       //读取模型中的数据状态
            /*判断用户名，并处理*/
            if($save_status=='usernull'){
                $this->error('用户名不能为空');
            }
            if($save_status!==false){       //处理结果提示
                $this->success('管理员修改成功',url('showlist'));
            }else {
                $this->error('管理员修改失败');
            }
            return;
        }
        /*判断管理员是否存在，防止意外访问*/
        if(!$admins){
            $this->error('该管理员不存在，请联系网站管理者');
        }
        $authGroupAccess = db('auth_group_access')->where(array('uid'=>$id))->find();
        $authGroupRes = db('auth_group')->select();
        //分配模版
        $this->assign('authGroupRes',$authGroupRes);
        $this->assign('groupId',$authGroupAccess['group_id']);
        $this->assign('admins',$admins);  $this->assign('admins',$admins);    //分配模版
        return view();
    }
    /*
     * 删除管理员控制器方法
     * */
    public function del($id){
        $admin = new AdminModel();
        //将模型中的值读取过来并判断
        $del_status = $admin->deladmin($id);
        if($del_status =='initialize_administrator'){
            $this->error('初始化管理员不能删除');
        }
        if($del_status=='del_ok'){
            $this->success('管理员删除成功',url('showlist'));
        }else{
            $this->error('删除管理员失败');
        }
    }
    /*
     * 退出登录
     * */
    public function loginout(){
        session(null);
        $this->success('成功退出系统',url('login/index'));
    }
}
