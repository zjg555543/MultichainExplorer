<?php
namespace Home\Controller;
use Think\Controller;
class ChainInfoController extends Controller {
    public function index(){
        $model = M('chaininfo');
        $data = $model -> select();
        dump($data);
    }
}
