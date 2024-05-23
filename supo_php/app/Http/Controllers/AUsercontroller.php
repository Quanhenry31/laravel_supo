<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AUserController extends Controller
{
    public function index()
    {
        $user = User::paginate(5);
        return view('layouts.Admin.user', compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
