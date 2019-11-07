<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentUnit extends Model
{
    protected $table = "student_units";

    public function student()
    {
        return $this->hasMany(Student::class, 'student_number', 'student_number');
    }

    public function unit()
    {
        return $this->hasMany(Unit::class, 'unit_code', 'unit_code');
    }
}
