<?php
namespace Home\Controller;
use Think\Controller;
class BlockInfoController extends Controller {
    public function index(){
        $model = M('blockinfo');
        $data = $model -> select();
        dump($data);
    }
}
