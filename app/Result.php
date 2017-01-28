<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'student_id' , 'semester_id' , 'exam_id' , 'grade_id' , 'marks'
    ];

    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id');
    }

    public  function exam()
    {
        return $this->belongsTo('App\Exam', 'exam_id');
    }

    public  function grade()
    {
        return $this->belongsTo('App\Grade', 'grade_id');
    }

    public function semester()
    {
        return $this->belongsTo('App\Semester', 'semester_id');
    }

    public function getSemesterIdAttribute($value)
    {
        $name = Semester::find($value)->name;
        return $name;
    }
}
