<?php
namespace Home\Controller;
use Think\Controller;
class WithdrawalInfoController extends Controller {
    public function index(){
        $model = M('withdrawalinfo');
        
        $args = array(
            "chain_id" => $_GET['chain_id'],
        );
        $data = $model->where($args)->select(); 
        $this -> assign('data',$data);
        
        $this -> display();
    }
}
