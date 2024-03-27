<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Role;



class DashboardController extends Controller
{
public function index() {

    $roleCount = Role::count();
    $employeeCount = Employee::count();
    return view('dashboard', compact('roleCount','employeeCount'));
}

}
