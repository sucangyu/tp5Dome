<?php
namespace app\Home\controller;
use think\Controller;
class Index extends Controller
{
    //前置操作
    protected $beforeActionList = [
        //进行验证方法名,only/except二选一
        'checkLogin'=>[
//            'only'=>'index,test',//only只验证 , 'index,test'需要验证的方法名
            'except'=>'demo',//except除了指定的不验证剩下的都验证
        ],
    ];

    //验证方法,检测用户是否登录
    public function checkLogin(){
        exit('需要登陆');
    }
    public function index()
    {
//        return view();
        $this->result(['name'=>'xt'],200,'获取信息成功','json',['X-PowerBy'=>'WangTing']);
    }
    public function test(){
        return 'test';
    }
    public function demo(){
        return 'demo';
    }
}
