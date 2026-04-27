<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'age',
    ];

    public function scopeMaturedStudent($query)
    {
        return $query->where('age', '>=', 18);
    }
}
