<?php

namespace App\Http\Controllers;

use App\Models\Plan\Plan;

class PlanController extends Controller
{
    public function index()
    {
        $planes = Plan::orderBy('amount','ASC')->get();
        return view('planes.index',compact('planes'));
    }
}
