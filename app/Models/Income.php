<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Expense;
use App\Models\Income;

class Income extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'description', 'date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

