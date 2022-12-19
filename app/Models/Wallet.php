<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected  $fillable = [
            'current_amount',
    ];

    public function Customer(){
        return $this->belongsTo(Customer::class);
    }
}
