<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Session;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Redirect;
use App\Staff;
use App\Student;
use App\Problem;
use App\PastHistory;
use App\Family_members;
use App\Appiontment;


class DoctorController extends Controller 
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth:doctor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $data = array(

            'appiontmentStudent' =>DB::table('appiontments')
            ->join('students','appiontments.regNo','=','students.regno')
            ->select('students.regNo','students.fullname')
            ->where('appiontments.flag','=','0')
            ->where('appiontments.doctor','=','1')
            ->get(),

            'appiontmentStaff' =>DB::table('appiontments')
            ->join('staff','appiontments.regNo','=','staff.regNo')
            ->select('staff.regNo', 'staff.fullname')
            ->where('appiontments.flag','=','1')
            ->where('appiontments.doctor','=','1')
            ->get(),
            'appiontment' =>DB::table('appiontments')->get(),
        );


        return view('doctor.doc')->with($data);
    }
}
