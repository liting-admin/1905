<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloent extends Model
{
    public $primaryKey = 'c_id';
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'cloent';
}
