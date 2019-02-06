<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // MassAssignment(INSERT/UPDATEで入力できるカラムを指定。$fillable=ホワイトリスト、$guarded=ブラックリスト)
    protected $guarded = array('id');

    // 投稿されたら親スレのレコードのupdated_atも更新する(touchesプロパティ)
    protected $touches = ['thread'];
    public function thread()
    {
        return $this->belongsTo('App\Thread');
    }
}
