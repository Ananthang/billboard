<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $primaryKey = 'regNo';
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'regNo','faculty','fullname','residentAddress','permanentAddress','dob','sex','maritalStatus','LastSchoolAttend','parentsGuardianName','parentsGuardianAddress','parentsGuardianPhoneNumber','Operation','user_id',
    ];

    public function family_members()
    {
        return $this->hasMany(Family_member::class);
    }
    public function prescription()
    {
        return $this->hasMany(priscription::class);
    }


    public function appiontment()
    {
        return $this->belongTo(appiontment::class);
    }
    public function pasthistory()
    {
        return $this->hasmany(PastHistory::class);
    }
    public function problem()
    {
        return $this->hasmany(Problem::class);
    }
}
