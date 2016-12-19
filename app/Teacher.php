<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name' , 'dept_id' , 'mobile'
    ];

    public function teacherDepartment()
    {
        return $this->belongsTo('App\Department','dept_id');
    }
}
