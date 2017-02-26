<?php
/**
 * Author: BradChen
 * Date: 2017/2/24/16:03
 * Description:AuthRuleModel
 */
namespace app\xzadmin\model;
use think\Model;

class AuthRule extends Model
{
    /*
     * 无限级权限排序树形函数
     * */
    public function authRuleTree(){
        $authRuleRes = $this->order('sort asc')->select();
        return $this->sort($authRuleRes);
    }
  /*
   * 权限规则排序
   * @param string sort 方法名
   * @param int $level栏目级别
   * @param int $pid 上级权限的PID值
   * @return array $arr
   * */
    public function sort($data,$pid=0){
        static $arr = array();           //定义接收数据的数组
        foreach($data as $k => $v ){     //遍历接收到id值
            if($v['pid']==$pid){         //如该权限pid等于上级权限的pid,
                $v['dataid']=$this->getparentId($v['id']);      //存放当前权限的ID
                $arr[]=$v;
                $this->sort($data,$v['id']);        //将权限按照接收值排序
            }
        }
        return $arr;
    }
    /*
     * 获取子权限的ID
     * @param int $authRuleId 传递当前权限ID
     * */
    public function getchildrenId($authRuleId){
        $authRules = $this->select();
        return $this->_getchildrenId($authRules,$authRuleId);
    }
    /*
     * 获取包含该权限在内的所有子权限
     * @return array $arr
     * */
    public function _getchildrenId($authRules,$authRuleId){
        static $arr = array();
        foreach($authRules as $k=>$v){
            if($v['pid']==$authRuleId){
                $arr[]=$v['id'];
                $this->_getchildrenId($authRules,$v['id']);
            }
        }
        return $arr;
    }
    /*
     * 获取上级权限的ID，
     * @param int $authRuleId 传递当前权限ID
     * @param array $authRuleRes 所有权限结果集
     * @return array() $arr;
     * */
    public function getparentId($authRuleId){
        $authRuleRes = $this->select();
        return $this->_getparentId($authRuleRes,$authRuleId,True);
    }
    /*
     * 获取包含该权限在内的所有父级权限
     * */
    public function _getparentId($authRuleRes,$authRuleId,$clear=False){
        static $arr = array();      //创建一个空数组等下接收数据
        if($clear){     //清空数组
            $arr=array();
        }
        foreach($authRuleRes as $k=>$v){
            if($v['id']==$authRuleId){
                $arr[]=$v['id'];
                $this->_getparentId($authRuleRes,$v['pid'],False);
            }
        }
        asort($arr);
        $arrStr=implode('-',$arr);
        return $arrStr;
    }

}