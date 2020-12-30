<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'RKD01_Peribadi';
    protected $primaryKey = 'RKD01_NoMatrik';

    public function semesters(){
        //student has many semester
        return $this->hasMany(StudentSemester::class,'RKD01_Nomatrik','RKD01_Nomatrik');
    }
}
