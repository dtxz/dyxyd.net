<?php
/**
 * Author: BradChen
 * Date: 2017/2/27/15:06
 * Description:文章控制器
 */
namespace app\xzadmin\controller;

use app\xzadmin\controller\Common;
use app\xzadmin\model\Article as ArticleModel;
use app\xzadmin\model\Cate as CateModel;
class Article extends Common
{
    /*
     * 文章列表显示
     * */
    public function articleList(){
        $article = new ArticleModel();
        $artes = $article->selectArticle();
        $this->assign('artes',$artes);
        return view('articleList');
    }
    /*
     * 新增、添加文章方法
     * */
    public function add(){
        $cate = new CateModel();
        if(request()->isPost()){
            $data = input('post.');
            $data['time']=time();
            //后端规则与场景验证
            $validate = \think\Loader::validate('Article');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            $article = new ArticleModel;
            //添加文章结果处理
            if($article->save($data)){
                $this->success('文章添加成功',url('articleList'));
            }else{
                $this->error('文章添加失败');
            }
            return;
        }
        //调用catetree()方法，使用无限极分类栏目
        $cateres = $cate -> cateTree();
        //将无限极分类栏目分配到模版
        $this->assign('cateres',$cateres);
        return view();
    }
    /*
     * 编辑修改文章的方法
     * */
    public function edit(){
        //接收表单数据，判断并处理
        if(request()->isPost()){
            //后端规则与场景验证
            $data=input('post.');
            $validate = \think\Loader::validate('Article');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $article = new ArticleModel();
            //将接收的数据更新到表中
            $save = $article->update($data);
            //处理结果反馈
            if($save){
                $this->success('文章修改成功',url('articleList'));
            }else{
                $this->error('文章修改失败');
            }
            return;
        }
        $cate = new CateModel();
        $cateres = $cate->catetree();
        $arts = db('article')->find(input('id'));
        $this->assign(array(
            'cateres'=>$cateres,
            'arts' => $arts,
        ));
        return view( );
    }

    /*
     * 删除文章的方法
     * （MODEL中钩子函数删除文章图片）
     * */
    public function del(){
        //结果处理
        if(ArticleModel::destroy(input('id'))){
            $this->success('文章已经被删除',url('articleList'));
        }else{
            $this->error('删除文章失败');
        }
    }

}