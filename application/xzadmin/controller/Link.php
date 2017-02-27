<?php
/**
 * Author: BradChen
 * Date: 2017/2/27/22:13
 * Description:友情链接控制器
 */
namespace app\xzadmin\controller;
use app\xzadmin\controller\Common;
use app\xzadmin\model\Link as LinkModel;

class Link extends Common
{
    /*
     * 友情链接列表
     * */
    public function linkList(){
        //栏目排序
        $link = new LinkModel();
        if(request()->isPost()){
            $sorts = input('post.');
            //遍历字段sort,$k为id，$v为新值
            foreach ($sorts as $k => $v) {
                $link->update(['id'=>$k,'sort'=>$v]);
            }
            $this->success('更新排序成功',url('linkList'));
            return;
        }
        $linkres = $link->order('sort asc')->paginate(10);
        $this->assign('linkres',$linkres);
        return view();
    }
    /*
     * 新增友情链接方法
     * */
    public function add(){
        if(request()->isPost()){
            //数据接收后端验证
            $data = input('post.');
            $validate = \think\Loader::validate('Link');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            //接收数据添加到表中
            $link = new LinkModel();
            $addlinks = $link ->save($data);
            //结果处理
            if($addlinks){
                $this->success('友情链接添加成功',url('linkList'));
            }else{
                $this->error('友情链接添加失败');
            }
        }
        return view();
    }
    //编辑栏目的方法
    public function edit(){
        if(request()->isPost()){
            //数据接收后端验证
            $data = input('post.');
            $validate = \think\Loader::validate('Link');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            //接收修改友情链接并写入表中
            $editlink = LinkModel::update($data,['id'=>input('id')]);
            if($editlink!== false){
                $this->success('链接修改成功',url('linkList'));
            }else{
                $this->error('友情链接修改失败');
            }
            return;
        }
        $links = LinkModel::find(input('id'));
        $this->assign('links',$links);
        return view();
    }
    //删除栏目的方法
    public function del(){
        $dellink = LinkModel::destroy(input('id'));
        //结果处理判断
        if($dellink){
            $this->success('链接删除成功',url('lst'));
        }else{
            $this->error('友情链接删除失败');
        }
    }

}