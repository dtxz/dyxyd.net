<?php
/**
 * Author: BradChen
 * Date: 2017/2/26/22:29
 * Description:栏目\分类控制器
 */
namespace app\xzadmin\controller;

use app\xzadmin\controller\Common;
use app\xzadmin\model\Cate as CateModel;
use app\xzadmin\model\Article as ArticleModel;
class Cate extends Common
{
    /*
     * 前置方法,删除分类前，删除旗下所有子分类
     * */
    protected $beforeActionList = [
        'delsoncate'  =>  ['only'=>'del'],
    ];
    /*
     * 栏目分类列表
     * */
    public function cateList(){
        $cate = new CateModel();
        if(request()->isPost()){
            $sort = input('post.');        //接收数据
            /*遍历接收到的排序数字,$k为id，$v为新值*/
            foreach ($sort as $k => $v){
                $cate->update(['id'=>$k,'sort'=>$v]);
            }
            $this->success('更新排序成功',url('cateList'));
            return;
        }
        //查询栏目
        $cateres = $cate->catetree();
        //分配模版
        $this->assign('cateres',$cateres);
        return view('cateList');
    }

    /*
     * 新增、添加栏目分类
     * */
    public function add(){
        $cate = new CateModel();
        if(request()->isPost()){
            /*后端数据带场景验证*/
            $data = input('post.');
            $validate = \think\Loader::validate('Cate');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->Error());
            }
            $cate->data($data);
            $addcate = $cate->save();
            if($addcate){
                $this->success('添加栏目成功',url('cateList'));
            }else{
                $this->error('栏目添加失败',url('cateList'));
            }
        }
        $cateres = $cate->cateTree();       //查询并得到栏目的树形结构
        $this->assign('cateres',$cateres);      //将结果分配到模版中
        return view();
    }
    /*
     * 编辑栏目分类
     * */
    public function edit(){
        $cate = new CateModel();
        if(request()->isPost()){
            $data = input('post.');
            $validate = \think\Loader::validate('Cate');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $save = $cate -> save($data,['id'=>input('id')]);
            if($save!==false){
                $this->success('栏目修改成功！',url('cateList'));
            }else{
                $this->error('修改栏目失败');
            }
            return;
        }
        $cates = $cate->find(input('id'));      //当前编辑栏目的数据
        $cateres = $cate->catetree();       //查询栏目
        $this->assign(array(        //分配模版
            'cateres'=>$cateres,
            'cates'=>$cates,
        ));
        return view();
    }
    /*
     * 删除栏目分类
     * */
    public function del(){
        $del = db('cate')->delete(input('id'));
        if($del){
            $this->success('删除栏目成功',url('cateList'));
        }else{
            $this->error('删除栏目失败');
        }
    }
    /*
     * 删除一级栏目以及子栏目的方法
     * */
    public function delsoncate(){
        $cateid = input('id');      //获取当前被删除栏目的ID
        $cate = new CateModel();
        $sonids = $cate->getchilrenid($cateid);         //查找到所有层级的子栏目
        $allcateid = $sonids;       //将子栏目ID取出
        $allcateid[] = $cateid;     //将主栏目ID也取出
        if($sonids){        //如果子栏目存在就删除掉
            db('cate')->delete($sonids);
        }
        /*删除栏目下的文章*/
        foreach($allcateid as $k=> $v){
            $article = new ArticleModel();
            $article -> where(array('cateid'=> $v))->delete();
        }
    }

}