<?php
namespace Home\Controller;
use Think\Controller;
class MainChainInfoController extends Controller {
    public function index(){
        $model = M('mainchaininfo');
        $data = $model -> select();
        $this -> assign('data',$data);
        $this -> display();
    }
}
