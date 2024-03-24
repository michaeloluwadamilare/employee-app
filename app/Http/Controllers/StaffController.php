<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class StaffController extends Controller
{
    //
    public function index()
    {
        $staffList = User::all();
        return view('admin.staff', compact('staffList'));

    }
}
