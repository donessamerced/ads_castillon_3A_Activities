<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    public function courses(){
        return $this->belongsTo(courses::class);
    }
    use HasFactory;
}
