<?php

namespace App\Http\Controllers;


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
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $flag = true;
            $brother1 = false;
            $brother2 = false;
            $brother3 = false;
            $sister1 = false;
            $sister2 = false;
            $sister3 = false;
            $probool = false;
            $pastbool = false;

            $faculty = $request->faculty;
            $regno = $request->regno;
            $fullname = $request->fullname;
            $resaddress = $request->resaddress;
            $peraddress = $request->peraddress;
            $dob = $request->dob;
            $gender = $request->gender;
            $maritalState = $request->maritalState;
            $lastSchoolAttend = $request->lastSchoolAttend;
            $parentsGuardianname = $request->parentsGuardianname;
            $parentsGuardianAddress = $request->parentsGuardianAddress;
            $gPhonenumber = $request->gPhonenumber;
            $operation = $request->operation;

            $fOccupation = $request->fOccupation;
            $fRelation = $request->fRelation;
            $fAge = $request->fAge;
            $fIllness = $request->fIllness;
            $fIfdead = $request->fIfdead;
            $mOccupation = $request->mOccupation;
            $mRelation = $request->mRelation;
            $mAge = $request->mAge;
            $mIllness = $request->mIllness;
            $mIfdead = $request->mIfdead;
            if($request->has('bOccupation'))
            {
            $brother1 = true;
                $bOccupation = $request->bOccupation;
                $bRelation = $request->bRelation;
                $bAge = $request->bAge;
                $bIllness = $request->bIllness;
                $bIfdead = $request->bIfdead;
            }

            if ($request->has('bOccupation')) {
                $sister1 = true;
                $sOccupation = $request->sOccupation;
                $sRelation = $request->sRelation;
                $sAge = $request->sAge;
                $sIllness = $request->sIllness;
                $sIfdead = $request->sIfdead;
            }
            if ($request->has('problem')){
                $probool = true;
                $problem = $request->problem;
            }
            if($request->has('pastHistory')){
                $pastbool = true;
                $pastHistory = $request->pastHistory; 
            }


            $student = new Student;

            $student->faculty = $faculty;
            $student->regno = $regno;
            $student->fullname = $fullname;
            $student->residentAddress = $resaddress;
            $student->permanentAddress = $peraddress;
            $student->dob = $dob;
            $student->sex = $gender;
            $student->maritalStatus =  $maritalState;
            $student->LastSchoolAttend = $lastSchoolAttend;
            $student->parentsGuardianName = $parentsGuardianname;
            $student->parentsGuardianAddress = $parentsGuardianAddress;
            $student->parentsGuardianPhoneNumber = $gPhonenumber;
            $student->Operation = $operation;
            $student->user_id = 1;

        if($student->save())
        {
            if($probool){
                for($i=0 ; $i< count($problem);$i++)
                {

                    $pro = new problem;
                    $pro->students_regNo = $regno;
                    $pro->problem = $problem[$i];
                    if($pro->save())
                    {

                    }
                    else{
                        $flag = false;
                        break;
                    }
                }
            }
            for($i=0 ; $i< count($pastHistory);$i++)
            {

                $past = new pastHistory;
                $past->students_regNo = $regno;
                $past->past_disease = $pastHistory[$i];
                if($past->save()){
                   
                }
                else{
                    $flag = false;
                    break;
                }
            }


            $family1 = new Family_members;

            $family1->occupation = $fOccupation;
            $family1->member_relation = $fRelation;
            $family1->age = $fAge;
            $family1->illness = $fIllness;
            $family1->ifdeadcauseofdeath = $fIfdead;
            $family1->students_regNo = $regno;
            if ($family1->save()) {
                $family2 = new Family_members;
                $family2->occupation = $mOccupation;
                $family2->member_relation = $mRelation;
                $family2->age = $mAge;
                $family2->illness = $mIllness;
                $family2->ifdeadcauseofdeath = $mIfdead;
                $family2->students_regNo = $regno;


                if ($family2->save() && $brother1) {
                    $family3 = new Family_members;
                    $family3->occupation = $bOccupation;
                    $family3->member_relation = $bRelation;
                    $family3->age = $bAge;
                    $family3->illness = $bIllness;
                    $family3->ifdeadcauseofdeath = $bIfdead;
                    $family3->students_regNo =  $regno;


                    if ($family3->save() && $sister1) {
                        $family4 = new Family_members;
                        $family4->occupation = $sOccupation;
                        $family4->member_relation = $sRelation;
                        $family4->age = $sAge;
                        $family4->illness = $sIllness;
                        $family4->ifdeadcauseofdeath = $sIfdead;
                        $family4->students_regNo =  $regno;

                        if ($family4->save()) {
                            return redirect('/receptionist');
                        } else {
                            $flag = false;
                        }
                    } else if ($family3->save() && !$sister1) {
                        return redirect('/receptionist');
                    } 
                    else {
                        $flag = false;
                    }

                } 
                else if ($family2->save() && !$brother1) {
                    return redirect('/receptionist');
                } 
                else {
                    $flag = false;
                }

                

            }
            else{
                $flag = false; 
            }


           if(!$flag){
                DB::table('problems')->where('students_regNo', $regno)->delete();
                DB::table('students')->find($regno)->delete();
                DB::table('family_members')->where('students_regNo', $regno)->delete();
                DB::table('past_histories')->where('students_regNo', $regno)->delete();
                return "error";
            }
            
   

        }

            


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       /*  $appiontmentid = DB::table('appiontments')->where('regNo', '=', $id)->first();
        $appiontment = Appiontment::find($appiontmentid)->get();
        $appiontment->doctor = 0;
        $appiontment->save(); */

        
        $data = array(
            'Students' => Student::find($id),
            'Staffs' => Staff::find($id),
            'problems' =>DB::table('problems')->where('students_regNo','=',$id)->get(),
            'past_histories' =>DB::table('past_histories')->where('students_regNo','=',$id)->get(),
            'family_members' =>DB::table('family_members')->where('students_regNo','=',$id)->get(),
            'prescriptions' => DB::table('prescriptions')
            ->join('medicine_stocks', 'prescriptions.medicine_stocks_id','=','medicine_stocks.id')
            ->join('medicines','medicine_stocks.medicine_id','=','medicines.id')
            ->select('medicines.medicine_name', 'prescriptions.medicine_of_count', 'prescriptions.created_at')
            ->where('regNo','=',$id)
            ->get(),  
            'specialNotes' => DB::table('notes')->where('regNo', '=', $id)->get()
            );
        return view('doctor.docStudent')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =array(
            'Students' => Student::find($id),
        );
        return view('student')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('problems')->where('students_regNo', $regno)->delete();
        DB::table('family_members')->where('students_regNo', $regno)->delete();
        DB::table('past_histories')->where('students_regNo', $regno)->delete();

        $flag = true;
        $brother1 = false;
        $brother2 = false;
        $brother3 = false;
        $sister1 = false;
        $sister2 = false;
        $sister3 = false;
        $probool = false;
        $pastbool = false;

        $faculty = $request->faculty;
        $regno = $request->regno;
        $fullname = $request->fullname;
        $resaddress = $request->resaddress;
        $peraddress = $request->peraddress;
        $dob = $request->dob;
        $gender = $request->gender;
        $maritalState = $request->maritalState;
        $lastSchoolAttend = $request->lastSchoolAttend;
        $parentsGuardianname = $request->parentsGuardianname;
        $parentsGuardianAddress = $request->parentsGuardianAddress;
        $gPhonenumber = $request->gPhonenumber;
        $operation = $request->operation;

        $fOccupation = $request->fOccupation;
        $fRelation = $request->fRelation;
        $fAge = $request->fAge;
        $fIllness = $request->fIllness;
        $fIfdead = $request->fIfdead;
        $mOccupation = $request->mOccupation;
        $mRelation = $request->mRelation;
        $mAge = $request->mAge;
        $mIllness = $request->mIllness;
        $mIfdead = $request->mIfdead;
        if ($request->has('bOccupation')) {
            $brother1 = true;
            $bOccupation = $request->bOccupation;
            $bRelation = $request->bRelation;
            $bAge = $request->bAge;
            $bIllness = $request->bIllness;
            $bIfdead = $request->bIfdead;
        }

        if ($request->has('bOccupation')) {
            $sister1 = true;
            $sOccupation = $request->sOccupation;
            $sRelation = $request->sRelation;
            $sAge = $request->sAge;
            $sIllness = $request->sIllness;
            $sIfdead = $request->sIfdead;
        }
        if ($request->has('problem')) {
            $probool = true;
            $problem = $request->problem;
        }
        if ($request->has('pastHistory')) {
            $pastbool = true;
            $pastHistory = $request->pastHistory;
        }


        $student =Student::find($regNo);

        $student->faculty = $faculty;
        $student->regno = $regno;
        $student->fullname = $fullname;
        $student->residentAddress = $resaddress;
        $student->permanentAddress = $peraddress;
        $student->dob = $dob;
        $student->sex = $gender;
        $student->maritalStatus =  $maritalState;
        $student->LastSchoolAttend = $lastSchoolAttend;
        $student->parentsGuardianName = $parentsGuardianname;
        $student->parentsGuardianAddress = $parentsGuardianAddress;
        $student->parentsGuardianPhoneNumber = $gPhonenumber;
        $student->Operation = $operation;
        $student->user_id = 1;

        if ($student->save()) {
            if ($probool) {
                for ($i = 0; $i < count($problem); $i++) {

                    $pro = new problem;
                    $pro->students_regNo = $regno;
                    $pro->problem = $problem[$i];
                    if ($pro->save()) {

                    } else {
                        $flag = false;
                        break;
                    }
                }
            }
            for ($i = 0; $i < count($pastHistory); $i++) {

                $past = new pastHistory;
                $past->students_regNo = $regno;
                $past->past_disease = $pastHistory[$i];
                if ($past->save()) {

                } else {
                    $flag = false;
                    break;
                }
            }


            $family1 = new Family_members;

            $family1->occupation = $fOccupation;
            $family1->member_relation = $fRelation;
            $family1->age = $fAge;
            $family1->illness = $fIllness;
            $family1->ifdeadcauseofdeath = $fIfdead;
            $family1->students_regNo = $regno;
            if ($family1->save()) {
                $family2 = new Family_members;
                $family2->occupation = $mOccupation;
                $family2->member_relation = $mRelation;
                $family2->age = $mAge;
                $family2->illness = $mIllness;
                $family2->ifdeadcauseofdeath = $mIfdead;
                $family2->students_regNo = $regno;


                if ($family2->save() && $brother1) {
                    $family3 = new Family_members;
                    $family3->occupation = $bOccupation;
                    $family3->member_relation = $bRelation;
                    $family3->age = $bAge;
                    $family3->illness = $bIllness;
                    $family3->ifdeadcauseofdeath = $bIfdead;
                    $family3->students_regNo = $regno;


                    if ($family3->save() && $sister1) {
                        $family4 = new Family_members;
                        $family4->occupation = $sOccupation;
                        $family4->member_relation = $sRelation;
                        $family4->age = $sAge;
                        $family4->illness = $sIllness;
                        $family4->ifdeadcauseofdeath = $sIfdead;
                        $family4->students_regNo = $regno;

                        if ($family4->save()) {
                            return redirect('/receptionist');
                        } else {
                            $flag = false;
                        }
                    } else if ($family3->save() && !$sister1) {
                        return redirect('/receptionist');
                    } else {
                        $flag = false;
                    }

                } else if ($family2->save() && !$brother1) {
                    return redirect('/receptionist');
                } else {
                    $flag = false;
                }



            } else {
                $flag = false;
            }


            if (!$flag) {
               $problem = DB::table('problems')->where('students_regNo', $regno)->get();
              $students = DB::table('students')->find($regno)->get();
              $family_members = DB::table('family_members')->where('students_regNo', $regno)->get();
              $past_histories = DB::table('past_histories')->where('students_regNo', $regno)->get();
                $problem->delete();
                    
                    $family_members->delete();
                    $past_histories->delete();
$students->delete();
                return "error";
            }



        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       /* */
        DB::table('students')->find($id)->delete();
        DB::table('problems')->where('students_regNo', $id)->delete();
        DB::table('family_members')->where('students_regNo', $id)->delete();
        DB::table('past_histories')->where('students_regNo', $id)->delete(); 
    }
}
