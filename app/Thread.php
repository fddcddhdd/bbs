<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    // MassAssignment(INSERT/UPDATEで入力できるカラムを指定。$fillable=ホワイトリスト、$guarded=ブラックリスト)
    protected $guarded = array('id');

    // このスレの発言を取得
    public function post_list()
    {
        return $this->hasMany('App\Post', 'thread_id','id')
            ->orderBy('created_at');
    }
}
