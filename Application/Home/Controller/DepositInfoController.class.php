<?php
namespace Home\Controller;
use Think\Controller;
class DepositInfoController extends Controller {
    public function index(){
        $model = M('depositinfo');
        $data = $model -> select();
        $this -> assign('data',$data);
        $this -> display();
    }
}
