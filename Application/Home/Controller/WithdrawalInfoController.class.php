<?php
namespace Home\Controller;
use Think\Controller;
class WithdrawalInfoController extends Controller {
    public function index(){
        $model = M('withdrawalinfo');
        $data = $model -> select();
        dump($data);
    }
}
