<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidate extends Model
{
    use HasFactory;

    
    protected $guarded = [];
    public function score()
    {
        return $this->hasMany(score::class, 'candidate', 'id');
    }
    
}


