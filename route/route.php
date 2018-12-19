<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/[:name]/[:type]', 'index/hello');//:name加[]代表name可选
Route::rule('index', 'index/index');
Route::rule('', 'index/index');//只有域名时访问首页
Route::get('wapIndex', 'mobile/index/index');
Route::get('pcIndex', 'home/index/index');
Route::get('admin', 'admin/index/index');
Route::get('adminLogin', 'admin/login/index');


return [

];
