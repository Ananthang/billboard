<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Session;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'doctors' => DB::table('doctors')->get(),
            'phamas' => DB::table('users')->where('role', '=', 'pharmacists')->get(),
            'receps' => DB::table('users')->where('role', '=', 'receptionist')->get(),
        );
        session('auth', 'receptionist');
        return view('auth.Adminpanel')->with($data);
    }
}
