<?php
/**
 * Author: BradChen
 * Date: 2017/2/24/15:29
 * Description:AuthGroupModel
 */
namespace app\xzadmin\model;
use think\Model;
class Article extends Model
{
    public function selectArticle(){
        $article = db('article')->field('a.*,c.catename')->alias('a')->join('xz_cate c','a.cateid=c.id')->paginate(10);
        return $article;
    }
    /*
     * 上传文件的钩子函数
     * */
    protected static function init(){
        Article::event ('before_insert',function($data){
            /*图片上传处理成地址存储*/
            if($_FILES['thumb']['tmp_name']){
                $file = request()->file('thumb');       //获取表单上传文件
                $info = $file->move(ROOT_PATH.'public'.DS.'uploads');       //移动到框架应用根目录/public/uploads/ 目录下
                /*上传地址处理*/
                if($info){
                    /*成功上传后 获取上传信息
                    输出 ROOT_PATH.'public'.DS.'uploads'/20160820/xxx.jpg*/
                    $thumb = DS.'uploads'.'/'.$info->getSaveName();
                    $data['thumb'] = $thumb;
                }else{
                    echo $file->getError();     //上传失败获取错误信息
                }
            }
        });
        /*修改上传图片的钩子函数*/
        Article::event('before_update',function($article){
            /*图片上传处理成地址存储*/
            if($_FILES['thumb']['tmp_name']){
                $arts = Article::find($article->id);        //找到原图
                //dump($_SERVER['DOCUMENT_ROOT'].$arts['thumb']);die;
                $thumbpath=$_SERVER['DOCUMENT_ROOT'].$arts['thumb'];
                //删除原图
                if(file_exists($thumbpath)){
                    @unlink($thumbpath);
                }
                $file = request()->file('thumb');       // 获取表单上传文件
                $info = $file->move(ROOT_PATH.'public'.DS.'uploads');       // 移动到框架应用根目录/public/uploads/ 目录下
                /*上传成功地址处理*/
                if($info){
                   /* 成功上传后 获取上传信息
                    * 输出 ROOT_PATH.'public'.DS.'uploads'/20160820/xxx.jpg*/
                    $thumb = DS.'uploads'.'/'.$info->getSaveName();
                    $article['thumb'] = $thumb;
                }
            }
        });
        /*
         * 删除文章前判断文章是否有图片，有则删之
         * */
        Article::event('before_delete',function($article){
            $arts = Article::find($article->id);    //获取当前文章ID
            $thumbpath=$_SERVER['DOCUMENT_ROOT'].$arts['thumb'];    //获取当前文章图片存储的地址
            /*删除图片*/
            if(file_exists($thumbpath)){
                @unlink($thumbpath);
            }
        });

    }
}