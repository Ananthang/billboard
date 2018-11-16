<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Session;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Redirect;

class StaffController extends Controller
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
      

        $regno = $request->regno;
        $fullname = $request->fullname;
        $age = $request->age;
        $phonenumber = $request->phonenumber;
        $sex = $request->gender;
        $maritalStatus = $request->maritalState;
        $permanentAddress = $request->privateAddress;
        $residentAddress = $request->resiAddress;
        $department = $request->department;
        $designation = $request->designation;
        $faculty = $request->faculty;
        $height = $request->height;
        $weight = $request->weight;
        $bloodGroup = $request->bloodgroup;
        $user_id = $request->user_id;

        $staff = new Staff;
        $staff->regNo = $regno;
            $staff->fullname = $fullname;
            $staff->age = (int)$age;
            $staff->phonenumber = $phonenumber;
            $staff->sex = $sex;
            $staff->maritalStatus = $maritalStatus;
            $staff->permanentAddress = $permanentAddress;
            $staff->residentAddress = $residentAddress;
            $staff->department = $department;
            $staff->designation = $designation;
            $staff->faculty = $faculty;
            $staff->height = (int)$height;
            $staff->weight = (int)$weight;
            $staff->bloodGroup = $bloodGroup;
            $staff->user_id = (int)$user_id;
            if($staff->save()){
            return redirect('/receptionist');
            }
            else {
            return redirect('/receptionist');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       /*  $appiontmentid = DB::table('appiontments')->where('regNo', '=', $id)->first();
        $appiontment = Appiontment::find($appiontmentid)->get();
        $appiontment->doctor = 0;
        $appiontment->save(); */
        $data = array(
            'Staffs' => Staff::find($id),
            'prescriptions' => DB::table('prescriptions')
                ->join('medicine_stocks', 'prescriptions.medicine_stocks_id', '=', 'medicine_stocks.id')
                ->join('medicines', 'medicine_stocks.medicine_id', '=', 'medicines.id')
                ->select('medicines.medicine_name', 'prescriptions.medicine_of_count', 'prescriptions.created_at')
                ->where('regNo', '=', $id)
                ->get(),
            'specialNotes' => DB::table('notes')->where('regNo', '=', $id)->get()
        );
        return view('doctor.docStaff')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::find($id);

        return view('staff')->with('staffs', $staff);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $regno = $request->regno;
        $fullname = $request->fullname;
        $age = $request->age;
        $phonenumber = $request->phonenumber;
        $sex = $request->gender;
        $maritalStatus = $request->maritalState;
        $permanentAddress = $request->privateAddress;
        $residentAddress = $request->resiAddress;
        $department = $request->department;
        $designation = $request->designation;
        $faculty = $request->faculty;
        $height = $request->height;
        $weight = $request->weight;
        $bloodGroup = $request->bloodgroup;
        $user_id = $request->user_id;

        $staff = Staff::find($id);
        $staff->regNo = $regno;
        $staff->fullname = $fullname;
        $staff->age = (int)$age;
        $staff->phonenumber = $phonenumber;
        $staff->sex = $sex;
        $staff->maritalStatus = $maritalStatus;
        $staff->permanentAddress = $permanentAddress;
        $staff->residentAddress = $residentAddress;
        $staff->department = $department;
        $staff->designation = $designation;
        $staff->faculty = $faculty;
        $staff->height = (int)$height;
        $staff->weight = (int)$weight;
        $staff->bloodGroup = $bloodGroup;
        $staff->user_id = (int)$user_id;
        if ($staff->save()) {
            return redirect('/receptionist');
        } else {
            return redirect('/receptionist');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
