<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public $table="record";
    public $guarded = [];
    public $timestamps=false;
    public  $primaryKey='id';
}
