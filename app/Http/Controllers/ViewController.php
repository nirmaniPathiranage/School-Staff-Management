<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function Staff()
    {
        return view('Homepage/Staff');
    }

    public function managestaff()
    {
        return view('Homepage/managestaff');
    }

    public function leave()
    {
        return view('Homepage/leave');
    }

    public function salary()
    {
        return view('Homepage/salary');
    }

}
