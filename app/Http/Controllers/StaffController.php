<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;


class StaffController extends Controller
{
    //
    public function index()
    {
        $staffList = User::with('roles')->get();
        return view('admin.staff', compact('staffList'));

    }
}
