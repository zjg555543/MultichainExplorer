<?php
namespace Home\Controller;
use Think\Controller;
class WithdrawalHistoryController extends Controller {
    public function index(){
        $model = M('withdrawalhistory');
        $data = $model -> select();
        dump($data);
    }
}
