<?php
namespace Home\Controller;
use Think\Controller;
class DepositHistoryController extends Controller {
    public function index(){
        $model = M('deposithistory');
        $data = $model -> select();
        dump($data);
    }
}
