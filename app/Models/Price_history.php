<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price_history extends Model
{
    use HasFactory;

    protected $fillable=[
   "cryptocurrency_id",
   "price",
   "volume_24h",
   "percent_change_24h",
   "fetched_at"

    ];

    public function cryptocurrency()
    {
        return $this->belongsTo(Crytocurrencys::class);
    }
}
