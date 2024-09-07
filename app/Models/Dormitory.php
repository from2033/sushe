<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dormitory extends Model
{
    protected $fillable = ['name', 'capacity', 'current_count'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_dormitory')
            ->withTimestamps()
            ->withPivot('joined_at');
    }
}

