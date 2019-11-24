<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $primaryKey = 'p_id';
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'product';
}
