<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunController extends Controller
{
    //localhost:8000/fun/hi
    function Hi($id){
        echo "hi " . $id;
    }
}
