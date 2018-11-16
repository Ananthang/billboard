<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'students_regNo', 'problem',
    ];

    public function student()
    {
        return $this->belongTo(student::class);
    }
}
