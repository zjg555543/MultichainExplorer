<?php
namespace Home\Controller;
use Think\Controller;
class DepositHistoryController extends Controller {
    public function index(){
        $model = M('deposithistory');
        $args = array(
            "chain_id" => "1",
        );
        $data = $model->where($args)->select(); 
        
        $this -> assign('data',$data);
        $this -> display();
    }
}
