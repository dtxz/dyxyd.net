<?php
/**
 * Author: BradChen
 * Date: 2017/2/4/20:57
 * Description:配置管理相关控制器
 */
namespace app\xzadmin\controller;
use app\xzadmin\controller\Common;
use app\xzadmin\model\Conf as ConfModel;
class Conf extends Common
{
    public function confList(){
        //配置项排序
        if(request()->isPost()){
            $sorts = input('post.');
            $conf = new ConfModel();
            //遍历字段sort,$k为id，$v为新值
            foreach ($sorts as $k => $v) {
                $conf->update(['id'=>$k,'sort'=>$v]);
            }
            $this->success('更新排序成功',url('confList'));
            return;
        }
        $confres =  ConfModel::order('sort asc')->paginate(10);
        $this->assign('confres',$confres);
        return view();
    }
    public function add(){
        if(request()->isPost()){
            $data = input('post.');
            //后台验证
            $validate = \think\Loader::validate('conf');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            if($data['values']){
                $data['values']=str_replace('，',',',$data['values']);
            }
            $conf = new ConfModel();
            //新增结果返回
            if($conf->save($data)){
                $this->success('新增配置成功！',url('confList'));
            }else{
                $this->error('新增配置失败');
            }
        }
        return view();
    }
    public function edit(){
        if(request()->isPost()){
            $data = input('post.');
            //后台验证
            $validate = \think\Loader::validate('conf');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            if($data['values']){
                $data['values']=str_replace('，',',',$data['values']);
            }
            $conf = new ConfModel();
            $save = $conf->save($data,['id'=>$data['id']]);
            //新增结果返回
            if($save!==false){
                $this->success('修改配置成功！',url('confList'));
            }else{
                $this->error('修改配置失败');
            }
        }
        $confs =  ConfModel::find(input('id'));
        $this->assign('confs',$confs);
        return view();
    }
    public function del(){
        $del = ConfModel::destroy(input('id'));
        if($del){
            $this->success('删除配置项成功！',url('confList'));
        }else{
            $this->error('删除配置失败！');
        }
    }
    public function conf(){
        if(request()->isPost()){
            $data = input('post.');
            $_formarr='';
            foreach ($data as $k => $v){
                $_formarr[] = $k;
            }
            //得到存储enname的数组
            $_confarr = db('conf')->field('enname')->select();
            $confarr = '';
            foreach ($_confarr as $key => $v ){
                 $confarr[] = $v['enname'];
             }
            //进行循环对比
            foreach($confarr as $k => $v){
                if(!in_array($v,$_formarr)){
                    $checkboxarr[] =$v;
                }
            }
            //判断是否接收有数据
            if($data){
                foreach ($data as $k=>$v){
                    ConfModel::where('enname',$k)->update(['value'=>$v]);
                }
                $this->success('修改配置成功');
            }
            return;
        }
        $confres = ConfModel::order('sort asc')->select();
        $this->assign('confres',$confres);
        return view();
    }
}
