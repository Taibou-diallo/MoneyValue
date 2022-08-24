<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pairs extends Model
{

    use HasFactory;

    public function start()
    {
        return $this->belongsTo(Currency::class, 'currency_start');
    }

    public function end()
    {
        return $this->belongsTo(Currency::class, 'currency_end');
    }
}
