<?php
namespace Home\Controller;
use Think\Controller;
class BlockInfoController extends Controller {
    public function index(){
        $model = M('blockinfo');
        $args = array(
            "chain_id" => "1",
        );
        $data = $model->where($args)->select(); 
        
        $this -> assign('data',$data);
        $this -> display();
    }
}
