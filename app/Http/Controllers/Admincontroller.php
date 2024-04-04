<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use  App\Http\Controllers\AdminController;
use Models\hospital;


class Admincontroller extends Controller
{
    public function index(){
        return view('Frontend.index');
    }
    public function show(){
         
        $result = DB::table('hospital_details')->get();
        return $result;
        
    }
}
