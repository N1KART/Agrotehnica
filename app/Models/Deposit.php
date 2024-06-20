<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Deposit extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'sdk',
        'size_m2',
        'nr_rooms',
        'address',
        'price_month',
        'description',
        'status',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
    
}
