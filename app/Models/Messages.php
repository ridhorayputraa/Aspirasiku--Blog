<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $guraded = ['id'];

    public function categories(){
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
