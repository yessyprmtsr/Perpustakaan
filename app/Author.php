<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\BinaryOp\BooleanOr;

class Author extends Model
{
    //nambahin mass assignment
    protected $guarded = [];
    public $timestamps= false;
    //relasi ke books
    public function books(){
        return $this->hasMany(Book::class);
    }
}
