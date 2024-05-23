<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PayDetail;

class Paycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payDetail = PayDetail::paginate(5);
        return view('layouts.Admin.pay',compact('payDetail'))->with('i',(request()->input('page',1) -1) *5);
    }

}