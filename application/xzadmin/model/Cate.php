<?php
/**
 * Author: BradChen
 * Date: 2017/2/26/22:32
 * Description:栏目、分类Model
 */
namespace app\xzadmin\model;
use think\Model;

class Cate extends Model
{
    /*
     * 栏目分类树形排序
     * */
    public function cateTree(){
        $cateres = $this->order('sort asc')->select();
        return $this->sort($cateres);
    }
    /*
     * 栏目分类无限级处理
     * @parma $pid 上级栏目的值
     * @parma $level栏目级别
     * */
    public function sort($data,$pid=0,$level=0){
        static $arr = array();
        foreach ($data as $k => $v){        //遍历出栏目分类
            if($v['pid']==$pid){
                $v['level'] = $level;
                $arr[] = $v;
                $this->sort($data,$v['id'],$level+1);   //将栏目分类经行排序
            }
        }
        return $arr;
    }
    /*
     * 遍历找到子栏目
     * */
    public function getchilrenid($cateid){
        $cateres = $this->select();         //查找所有栏目
        return $this->_getchilrenid($cateres,$cateid);
    }
    public function _getchilrenid($cateres,$cateid){
        static $arr= array();
        foreach ($cateres as $k=>$v){
            if($v['pid']==$cateid){
                $arr[] = $v['id'];
                $this->_getchilrenid($cateres,$v['id']);
            }
        }
        return $arr;
    }
}