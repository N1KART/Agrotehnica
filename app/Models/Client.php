<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Deposit;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'deposit_id',
        'name',
        'nr_phone'
    ];

    public function deposits(): HasMany
    {
        return $this->hasMany(Deposit::class);
    }
    
}

