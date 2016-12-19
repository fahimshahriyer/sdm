<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name','roll','registration_no','birth_date',
        'department_id','batch_id','mobile_no','address'
    ];
}
