<?php

namespace app\common\model;

use think\Model;

class Post extends Model
{
    //指定表名
    protected $table = 'posts';

    //关联评论表,一对多
    public function comments(){
        return $this->hasMany(comment::class,'post_id');
    }
    //关联标签,多对多
    public function tags(){
        return $this->belongsToMany(tage::class,'posts_tags','post_id');
    }
}
