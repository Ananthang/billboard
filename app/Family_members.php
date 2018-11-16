<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family_members extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','member_relation','occupation','age','illness','ifdeadcauseofdeath','regNo',
    ];

    public function student(){
        return $this->belongTo(Student::class);
    }
}
