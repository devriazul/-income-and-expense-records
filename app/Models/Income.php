<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'description', 'date']; // Add 'amount' to the fillable attributes

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

