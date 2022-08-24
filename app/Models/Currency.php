<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        'currency_code', 'name', 'symbol'
    ];

    public function startPairs()
    {
        return $this->hasMany(Pairs::class, 'currency_start');
    }

    public function endPairs()
    {
        return $this->hasMany(Pairs::class, 'currency_end');
    }

    // public function conversion()
    // {
    //     return $this->hasMany(Conversion::class, 'pair_id');
    // }
}
