<?php

namespace App\Http\Controllers;

use App\Models\Plan\Plan;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::orderBy('amount','ASC')->get();
        return view('plans.index',compact('plans'));
    }
}
