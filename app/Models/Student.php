<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    private $student;
    public function newStudents()
    {
        $this->student = new Student;
        $this->student->name = 'noushedul';
        $this->student->email = 'noushedakib@gmail.com';
        $this->student->save();
    }
}
