<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //nambahin mass assignment
    protected $guarded = [];
    public $timestamps= false;
}
