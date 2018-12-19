<?php

namespace app\common\model;

use think\Model;

class tage extends Model
{
    //指定表名
    protected $table = 'tage';
    //关联标签,多对多
    public function posts(){
        return $this->belongsToMany(Post::class,'posts_tags','tag_id');
    }
}
