<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{

    protected $fillable = [
        'doctor_id','regNo','user_id','flag'
    ];


    public function phama()
    {
        return $this->belongTo(user::class);
    }
    public function student()
    {
        return $this->belongTo(student::class);
    }
    public function staff()
    {
        return $this->belongTo(staff::class);
    }
    public function doctor()
    {
        return $this->belongTo(doctor::class);
    }



}
