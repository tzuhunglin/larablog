<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    //
    protected $table = 'posts';
    protected $fillable = ['title','title2','content','content2','userid','userid2'];

}
