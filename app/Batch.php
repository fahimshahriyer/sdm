<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = [
        'name' , 'starting_date'
    ];

    protected $dates = [
        'starting_date'
    ];
    public function students()
    {
        return $this->hasMany('App\Student', 'batch_id');
    }
}
