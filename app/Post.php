<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //TableName
    protected $table = "posts";
    //table promarykey
    protected $primarykey = "id";
    //table timestamp
    public $timestamps = true;
}
