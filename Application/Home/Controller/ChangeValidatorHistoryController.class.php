<?php
namespace Home\Controller;
use Think\Controller;
class ChangeValidatorHistoryController extends Controller {
    public function index(){
        $model = M('changevalidatorhistory');
        $data = $model -> select();
        dump($data);
    }
}
