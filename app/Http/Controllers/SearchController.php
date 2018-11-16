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

class SearchController extends Controller
{
    public function  userSearch(Request $request){
       // $flag = $request->regNo;
        $flag = $request->who;

        if($flag=="0")
        {
                $student =$request->regNo;
                $doctor_id = $request->doctor;
                $doctor = 1;
                $flag = 0;
                $appiontment = new Appiontment;
                $appiontment->doctor_id = $doctor_id;
                $appiontment->regNo = $student;
                $appiontment->flag = $flag;
                $appiontment->doctor = $doctor;
                if($appiontment->save()){
                    return redirect('/receptionist');
                }
        }
        else{
            $staff = $request->regNo;
            $doctor_id = $request->doctor;
            $doctor = 1;
            $flag = 1;
            $appiontment = new Appiontment;
            $appiontment->doctor_id = $doctor_id;
            $appiontment->regNo = $staff;
            $appiontment->flag = $flag;
            $appiontment->doctor = $doctor;
            if ($appiontment->save()) {
                return redirect('/receptionist');
            }
        }
    }

    public function  userSearchupdate(Request $request){
       // $flag = $request->regNo;
        $flag = $request->who;

        if($flag=="0")
        {
                $student =$request->regNo;
                $doctor_id = $request->doctor;
                $doctor = 1;
                $flag = 0;
                $appiontment = new Appiontment;
                $appiontment->doctor_id = $doctor_id;
                $appiontment->regNo = $student;
                $appiontment->flag = $flag;
                $appiontment->doctor = $doctor;
                if($appiontment->save()){
                    return redirect('/receptionist');
                }
        }
        else{
            $staff = $request->regNo;
            $doctor_id = $request->doctor;
            $doctor = 1;
            $flag = 1;
            $appiontment = new Appiontment;
            $appiontment->doctor_id = $doctor_id;
            $appiontment->regNo = $staff;
            $appiontment->flag = $flag;
            $appiontment->doctor = $doctor;
            if ($appiontment->save()) {
                return redirect('/receptionist');
            }
        }
    }

    public function register()
    {
         return redirect('/register');
    }

    public function searchStudent(){
$id = "dsfgfg";
        $data = array(
            'Students' => DB::table('students')->get(),
        );
        return view('studentall')->with($data);
    }

    public function searchStaff(){
        
        $staff = DB::table('staff')->get();
        return view('staffall')->with('staffs',$staff);
    }





    //Doctor See the Student
public function Doctorstudent($id){
    $data = array(
        'students'=>DB::table('students')->where('regno','=',$id)->get(),
    );

    return $data;
}




    
}
