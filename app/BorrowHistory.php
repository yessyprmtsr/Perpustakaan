<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowHistory extends Model
{
    protected $table = 'borrow_history';
    protected $guarded =[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
//buat relasi ke user
    public function admin()
    {
        return $this->belongsTo(User::class, 'id', 'admin_id');
    }
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
