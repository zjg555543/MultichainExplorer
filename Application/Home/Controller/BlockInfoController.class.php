<?php
namespace Home\Controller;
use Think\Controller;
class BlockInfoController extends Controller {
    public function index(){
        $model = M('blockinfo');
        $args = array(
            "chain_id" =>  $_GET['chain_id'],
        );
//        $data = $model->where($args)->select(); 
//        
//        $this -> assign('data',$data);
//        $this -> display();
        
        
        //分页第一步：查询总的记录数
        $count = $model -> count();
        //分页第二步：实例化分页类，传递参数
        $page = new \Think\Page($count,10);	//每页显示1个
        //分页第三步：可选步骤，定义提示文字
        $page->rollPage = 5;
        $page->lastSuffix = false;
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $page->setConfig('first','首页');
        //分页第四步：使用show方法生成url
        $show = $page->show();
        //分页第五步：展示数据
        $data = $model->limit($page->firstRow, $page->listRows)->where($args)->order('chain_block_seq desc')->select();
        //分页第六步：传递给模版
        $this->assign('data',$data);
        $this->assign('show',$show);
        $this->assign('count',$count);
        
        //分页第七步：展示模版
        $this -> display();
        
    }
}
