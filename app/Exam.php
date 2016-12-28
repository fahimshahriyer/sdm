<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
      'name' , 'marks' , 'is_active' , 'course_id'  
    ];

    public function getIsActiveAttribute($value)
    {
        return $status = $value ? 'Active' : 'De-Active' ;
    }

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }
}
