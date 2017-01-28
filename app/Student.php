<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name','roll','registration_no','birth_date',
        'department_id','batch_id','mobile_no','address','user_id'
    ];

    protected $dates = [
        'birth_date'
    ];
    public function department(){
        return $this->belongsTo('App\Department', 'department_id');
    }

    public function results()
    {
        return $this->hasMany('App\Result');
    }
}
