<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pairs extends Model
{

    public function currencies()
    {
        return $this->belongsToMany(Currency::class);
    }
    use HasFactory;
}
