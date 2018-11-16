<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appiontment extends Model
{
    protected $hidden = [
        'doctor_id','regNo','flag','doctor',
    ];

    public function  doctor()
    {
        return $this->belongTo(Doctor::class);
    }
    public function  student()
    {
        return $this->belongTo(student::class);
    }
    public function  staff()
    {
        return $this->belongTo(staff::class);
    }

}
