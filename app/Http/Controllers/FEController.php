<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FEController extends Controller
{
    public function grid()
    {
        return view('grid');
    }

    public function flex()
    {
        return view('flex');
    }
}
