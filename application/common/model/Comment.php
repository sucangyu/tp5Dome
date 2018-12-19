<?php

namespace app\common\model;

use think\Model;

class Comment extends Model
{
    //指定表名
    protected $table = 'comments';

    //关联文章表
    public function post(){
        return $this->belongsTo(Post::class,'post_id');
    }
}
