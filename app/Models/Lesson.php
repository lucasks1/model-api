<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function scheduling()
    {
        return $this->hasMany(Scheduling::class);
    }
}