<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Teacher;

class School extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student(){
        return $this->hasMany(Student::Class, 'school_id');
    }
    public function teacher(){
        return $this->hasMany(Teacher::Class,  'school_id');
    }

}
