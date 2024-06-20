<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Deposit;

class Image extends Model
{
    use HasFactory;
    protected $table ='images';
    protected $fillable = [
        'deposit_id',
        'src',
    ];
    public function deposit() : BelongsTo 
    {
        return $this->belongsTo(Deposit::class);
    }
}
