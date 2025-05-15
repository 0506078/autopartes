<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuponController extends Controller
{
    public function index()
    {
        return view('cupones.index');
    }
}
