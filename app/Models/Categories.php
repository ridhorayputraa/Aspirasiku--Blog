<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $guraded = ['id'];

    public function messages(){
        return $this->hasMany(Messages::class);
    }
}
