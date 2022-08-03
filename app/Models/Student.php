<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AssesmentResult;

class Student extends Model
{
    use HasFactory;

    protected $guarded;

    public function assesmentResult(){
        return $this->hasOne(AssesmentResult::Class);
    }

    public function school()
    {
        return $this->belongsTo(School::Class);
    }

}
