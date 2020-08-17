<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body'
    ];

    // user():のあとに記述してあるBelongsToはメソッドの戻り値の型を宣言している。型宣言を行うメリットとしては、安全性と可読性
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
