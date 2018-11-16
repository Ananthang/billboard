<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RedirectsUsers;
use App\Medicine;
use App\MedicineStock;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Session;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Redirect;
use App\Student;
use App\Staff;
use App\Prescription;
use App\Note;

class PharmacistController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      // $this->middleware('auth');
        $this->middleware('pharmacist');

    }

    public function index(){


        $data = array(

            'appiontmentStudent' => DB::table('appiontments')
                ->join('students', 'appiontments.regNo', '=', 'students.regno')
                ->select('students.regNo', 'students.fullname')
                ->where('appiontments.flag', '=', '0')
                ->get(),

            'appiontmentStaff' => DB::table('appiontments')
                ->join('staff', 'appiontments.regNo', '=', 'staff.regNo')
                ->select('staff.regNo', 'staff.fullname')
                ->where('appiontments.flag', '=', '1')
                ->get(),
            'appiontment' => DB::table('appiontments')->get(),
            'medicines' =>DB::table('medicines')
                    ->join('medicine_stocks','medicines.id','=', 'medicine_stocks.medicine_id')
                    ->select('medicine_stocks.id','medicines.medicine_name', 'medicine_stocks.batch_no', 'medicine_stocks.mfg_date', 'medicine_stocks.exp_date', 'medicine_stocks.stock')
                    ->get(),
        );
        session('auth', 'pharmacists');
        return view('auth.pharmacists')->with($data);
    }


    public function medicineAdd(Request $request){
            $medicine_name = $request->medicine_name;
            $id = $request->id;
            $batch_no = $request->batch_no;
            $mfg_date = $request->mfg_date;
            $exp_date = $request->exp_date;
            $stork = $request->stork;
            $user_id = $request->user_id;

            $medicine = new Medicine;

            $medicine->id = $id;
            $medicine->medicine_name = $medicine_name;

            if($medicine->save()){
            
                $medicine_strok = new MedicineStock;
                $medicine_strok->batch_no = $batch_no;
                $medicine_strok->mfg_date = $mfg_date;
                $medicine_strok->exp_date = $exp_date;
                $medicine_strok->medicine_id = $id;
                $medicine_strok->stock = $stork;
                $medicine_strok->user_id = $user_id;

            if($medicine_strok->save()){
                return redirect('/pharmacist');
            }
            else{
                return redirect('/pharmacist');
            }
            }

    }


    public function edit($id)
    {
        $data = array(

            'appiontmentStudent' => DB::table('appiontments')
                ->join('students', 'appiontments.regNo', '=', 'students.regno')
                ->select('students.regNo', 'students.fullname')
                ->where('appiontments.flag', '=', '0')
                ->get(),

            'appiontmentStaff' => DB::table('appiontments')
                ->join('staff', 'appiontments.regNo', '=', 'staff.regNo')
                ->select('staff.regNo', 'staff.fullname')
                ->where('appiontments.flag', '=', '1')
                ->get(),
            'appiontment' => DB::table('appiontments')->get(),
            'medicines' => DB::table('medicines')
                ->join('medicine_stocks', 'medicines.id', '=', 'medicine_stocks.medicine_id')
                ->select('medicine_stocks.id', 'medicines.medicine_name', 'medicine_stocks.batch_no', 'medicine_stocks.mfg_date', 'medicine_stocks.exp_date', 'medicine_stocks.stock')
                ->where('medicine_stocks.id','=',$id)
                ->get(),
        );
        session('auth', 'pharmacists');
        return with($data);
    }


    public function updateMedicine(Request $request){
        $data = array(

            'appiontmentStudent' => DB::table('appiontments')
                ->join('students', 'appiontments.regNo', '=', 'students.regno')
                ->select('students.regNo', 'students.fullname')
                ->where('appiontments.flag', '=', '0')
                ->get(),

            'appiontmentStaff' => DB::table('appiontments')
                ->join('staff', 'appiontments.regNo', '=', 'staff.regNo')
                ->select('staff.regNo', 'staff.fullname')
                ->where('appiontments.flag', '=', '1')
                ->get(),
            'appiontment' => DB::table('appiontments')->get(),
            'medicines' => DB::table('medicines')
                ->join('medicine_stocks', 'medicines.id', '=', 'medicine_stocks.medicine_id')
                ->select('medicine_stocks.id', 'medicines.medicine_name', 'medicine_stocks.batch_no', 'medicine_stocks.mfg_date', 'medicine_stocks.exp_date', 'medicine_stocks.stock','medicine_stocks.user_id')
                ->where('medicine_stocks.id', '=', $request->id)
                ->first(),
        );

        return view('medicine')->with($data);
    }


    public function updateMedicineInDatabase(Request $request)
    {
        $medicine_name = $request->medicine_name;
        $id = $request->id;
        $batch_no = $request->batch_no;
        $mfg_date = $request->mfg_date;
        $exp_date = $request->exp_date;
        $stork = $request->stork;
        $user_id = $request->user_id;
$medicine_id = DB::table('medicine_stocks')->select('medicine_stocks.medicine_id')->where('medicine_stocks','=',$id)->first();
        $medicine =Medicine::find($medicine_id);

        $medicine->id = $id;
        $medicine->medicine_name = $medicine_name;

        if ($medicine->save()) {

            $medicine_strok =MedicineStock::find($id);
            $medicine_strok->batch_no = $batch_no;
            $medicine_strok->mfg_date = $mfg_date;
            $medicine_strok->exp_date = $exp_date;
            $medicine_strok->medicine_id = $id;
            $medicine_strok->stock = $stork;
            $medicine_strok->user_id = $user_id;

            if ($medicine_strok->save()) {
                return redirect('/pharmacist');
            } else {
                return redirect('/pharmacist');
            }
        }

    }

    public function DeleteMedicineInDatabase(Request $request)
    {
        $id = $request->id;
        $medicine_strok = MedicineStock::find((int)$id)->first();
        $medicine_id =  $medicine_strok->medicine_id;
        $medicine_strok->delete();
        return redirect('/pharmacist');
    }

    public function getperscriptionStudent(Request $request){

        $regNo = $request->regNo;

        $data = array(
            'Students' => Student::find($regNo)->first(),
            'medicines' => DB::table('medicines')
                ->join('medicine_stocks', 'medicines.id', '=', 'medicine_stocks.medicine_id')
                ->select('medicine_stocks.id', 'medicines.medicine_name', 'medicine_stocks.batch_no', 'medicine_stocks.mfg_date', 'medicine_stocks.exp_date', 'medicine_stocks.stock', 'medicine_stocks.user_id')
                ->get(),
            'appiontments' =>DB::table('appiontments')
                ->where('regNo','=', $regNo)->first(),

        );
        return view('auth.perscription')->with($data);
    }

    public function getperscriptionStaff(Request $request){

        $regNo = $request->regNo;

        $data = array(
            'Staff' => Staff::find($regNo)->first(),
            'medicines' => DB::table('medicines')
                ->join('medicine_stocks', 'medicines.id', '=', 'medicine_stocks.medicine_id')
                ->select('medicine_stocks.id', 'medicines.medicine_name', 'medicine_stocks.batch_no', 'medicine_stocks.mfg_date', 'medicine_stocks.exp_date', 'medicine_stocks.stock', 'medicine_stocks.user_id')
                ->get(),
            'appiontments' =>DB::table('appiontments')
                ->where('regNo','=', $regNo)->first(),

        );
        return view('auth.perscriptionStaff')->with($data);
    }



    public function PostperscriptionStudent(Request $request)
    {
        $doctor_id = $request->doctor_id;
        $user_id = $request->user_id;
        $regNo = $request->regNo;
        $flag = $request->flag;
        if($request->has('medicine1')){
                $medicine1 = $request->medicine1;
            $medicien1Count = $request->medicien1Count;

            $prescription1 = new Prescription;
            $prescription1->doctor_id=  $doctor_id; 
            $prescription1->user_id=  $user_id; 
            $prescription1->regNo=  $regNo; 
            $prescription1->flag=  (int)$flag; 
            $prescription1->medicine_stocks_id  =  $medicine1; 
            $prescription1->medicine_of_count =  $medicien1Count;
            $prescription1>save();

        }
        if($request->has('medicine1')){
                $medicine1 = $request->medicine1;
            $medicien1Count = $request->medicien1Count;

            $prescription1 = new Prescription;
            $prescription1->doctor_id=  $doctor_id; 
            $prescription1->user_id=  $user_id; 
            $prescription1->regNo=  $regNo; 
            $prescription1->flag=  (int)$flag; 
            $prescription1->medicine_stocks_id  =  $medicine1; 
            $prescription1->medicine_of_count =  $medicien1Count;
            $prescription1>save();

        }
        if($request->has('medicine2')){
                $medicine2 = $request->medicine2;
            $medicien2Count = $request->medicien2Count;

            $prescription2 = new Prescription;
            $prescription2->doctor_id=  $doctor_id; 
            $prescription2->user_id=  $user_id; 
            $prescription2->regNo=  $regNo; 
            $prescription2->flag=  (int)$flag; 
            $prescription2->medicine_stocks_id  =  $medicine2; 
            $prescription2->medicine_of_count =  $medicien2Count;
            $prescription2>save();

        }
        if($request->has('medicine3')){
                $medicine3 = $request->medicine3;
            $medicien3Count = $request->medicien3Count;

            $prescription3 = new Prescription;
            $prescription3->doctor_id=  $doctor_id; 
            $prescription3->user_id=  $user_id; 
            $prescription3->regNo=  $regNo; 
            $prescription3->flag=  (int)$flag; 
            $prescription3->medicine_stocks_id  =  $medicine3; 
            $prescription3->medicine_of_count =  $medicien3Count;
            $prescription3>save();

        }
        if($request->has('medicine4')){
                $medicine4 = $request->medicine4;
            $medicien4Count = $request->medicien4Count;

            $prescription4 = new Prescription;
            $prescription4->doctor_id=  $doctor_id; 
            $prescription4->user_id=  $user_id; 
            $prescription4->regNo=  $regNo; 
            $prescription4->flag=  (int)$flag; 
            $prescription4->medicine_stocks_id  =  $medicine4; 
            $prescription4->medicine_of_count =  $medicien4Count;
            $prescription4>save();

        }
        if($request->has('medicine5')){
                $medicine5 = $request->medicine5;
            $medicien5Count = $request->medicien5Count;

            $prescription5 = new Prescription;
            $prescription5->doctor_id=  $doctor_id; 
            $prescription5->user_id=  $user_id; 
            $prescription5->regNo=  $regNo; 
            $prescription5->flag=  (int)$flag; 
            $prescription5->medicine_stocks_id  =  $medicine5; 
            $prescription5->medicine_of_count =  $medicien5Count;
            $prescription5>save();

        }

        if($request->has('note')){
            $note1 = $request->note;
            $note = new Note;

            $note->doctor_id = $doctor_id ; 
            $note->regNo = $regNo; 
            $note->flag = (int)$flag; 
            $note->user_id = $user_id; 
            $note->note = $note1; 
            $note->save();
        }

        DB::table('appiontments')->where('regNo','=',$regNo)->first()->delete();
                return redirect('/pharmacist');
    }

}
