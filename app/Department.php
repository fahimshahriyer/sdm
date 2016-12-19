<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name' , 'teacher_id'
    ];

    public function departmentHead()
    {
        return $this->belongsTo('App\Teacher','teacher_id');
    }
}
