<?php
namespace   Admin\Controller;
use Think\Controller;
class TestController extends Controller{
    public function index(){
        $POST= I('post.');
        if(IS_POST){
           $aa= M("Test")->where($POST)->find();
           if($aa){
               $this->success('登录成功',U('Test/index'),2);
           }else{
               $this->error("登录失败");
           }
        }else{
            $this -> display();
        }
        }
    public function gl()
    {
        $POST = I('post.');
        if (IS_POST) {
            $aa = M("Test")->where($POST)->find();
            if ($aa) {
                $this->success('登录成功', U('Test/gl'), 2);
            } else {
                $this->error("登录失败");
            }
        } else {
            $this->display();
        }
    }
    public function zl()
    {
        $POST = I('post.');
        if (IS_POST) {
            $aa = M("Test")->where($POST)->find();
            if ($aa) {
                $this->success('登录成功', U('Test/zl'), 2);
            } else {
                $this->error("登录失败");
            }
        } else {
            $this->display();
        }
    }
    public function gr(){
        $cs=M('Test')->select();
        $this -> assign('cs',$cs);
        $this -> display();
    }
    public  function xiu(){
        $POST=I('post.');
        $aa=M("Test")->where('Id=id')->save($POST);
        if($aa){
            $this->success('修改成功',U('Test/gr'),2);
        }else{
            $this->error("修改失败");
        }
    }
    public function ze(){
        $POST=I('post.');
        $aa=M("Test")->where('Id=id')->save($POST);
        if($aa){
            $this->success('修改成功',U('Test/gr'),2);
        }else{
            $this->error("修改失败");
        }
    }
    public function zc(){
        $POST = I('post.');
        $w = M('zc')-> add($POST);
        if($w){
        $this->success('注册成功', U('Test/0'), 2);
    }else{
        $this->error("注册失败");
    }
    }
}