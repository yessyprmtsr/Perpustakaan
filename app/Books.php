<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //menangani problem mass fillable
    protected $guarded = [];
    //relasi ke author
    public function author(){

        return $this->belongsTo(Author::class);
    }
}
