<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $primaryKey = 'client_id';

    protected $table = 'client';

    public $timestamps = false;

    // 白名单 表设计不允许为空的
    protected $filladle = [];
    // 黑名单 表设计允许为空的
    protected $guarded = [];
}
