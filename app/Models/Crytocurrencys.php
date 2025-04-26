<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crytocurrencys extends Model
{
    use HasFactory;

    protected $fillable=[
     "symbol",
     "name"
    ];

    public function priceHistories()
{
    return $this->hasMany(Price_history::class);
}
}

