<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

    protected $primaryKey = 'regNo';
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'regNo','faculty','fullname','age','sex','maritalStatus','residentAddress','permanentAddress','designation','department','height','weight','bloodGroup','user_id',
    ];

    public function prescription()
    {
        return $this->hasMany(priscription::class);
    }

    public function appiontment(){
        return $this->belongTo(appiontment::class);
    }
    public function user(){
        return $this->belongTo(User::class);
    }
}
