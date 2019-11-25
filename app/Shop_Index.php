<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_Index extends Model
{

    public $primaryKey='c_id';
    protected $table="shop_index";
    public $timestamps=false;
    protected $guarded=[];

}
