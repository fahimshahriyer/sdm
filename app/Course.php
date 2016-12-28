<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_code' , 'name' , 'department_id' , 'credit'
    ];

    public function courseDepartment(){
        return $this->belongsTo('App\Department','department_id');
    }
}
