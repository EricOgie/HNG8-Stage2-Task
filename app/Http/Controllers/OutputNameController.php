<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutputNameController extends Controller
{
    public function outputMyName()
    {
        return view('myName');
    }
}
