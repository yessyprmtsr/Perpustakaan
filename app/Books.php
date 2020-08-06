<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //relasi ke author
    public function author(){

        return $this->belongsTo(Author::class);
    }
}
