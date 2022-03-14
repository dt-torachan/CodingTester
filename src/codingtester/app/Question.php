<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $primaryKey = 'question_id';
}
