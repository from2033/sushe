<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'student_number'];

    public function dormitories()
    {
        return $this->belongsToMany(Dormitory::class, 'student_dormitory')
            ->withTimestamps()
            ->withPivot('joined_at');
    }
}

