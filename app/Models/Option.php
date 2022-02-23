<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function scopeOptions($query)
    {
        return $this->where('currency', 0);
    }

    public function scopeCurrencies($query)
    {
        return $this->where('currency', 1);
    }
}
