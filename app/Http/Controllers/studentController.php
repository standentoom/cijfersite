<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function getGrades(){

        $grades = DB::table('cijfers')->get();
       // dd($grades);
       // echo $grades;  // [6,10]
       return view('/student', ['grades'=>$grades]);
  
    }
    

}
