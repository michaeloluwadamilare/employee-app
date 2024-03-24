<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;


class StaffController extends Controller
{
    //
    public function index()
    {
        $staffList = DB::table('users')
            ->join('roles', 'users.roles_id', '=', 'roles.id')
            ->select('users.*', 'roles.role_name', 'roles.id')
            ->get();
        $roleList = Role::all();
        return view('admin.staff', compact('staffList','roleList'));

    }
    public function store(Request $request)
    {
        

        return redirect()->route('staff-lists')->with('success', 'Staff added successfully and default password is 1234!');

    }
    public function update(Request $request, string $id)
    {
        
        return redirect()->route('staff-lists')->with('success', 'Staff data updated successfully!');

    }

}
