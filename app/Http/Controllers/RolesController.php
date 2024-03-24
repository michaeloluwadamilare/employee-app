<?php

namespace App\Http\Controllers;
use App\Models\Role;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    
    public function index()
    {
        $roleLists = Role::all();
        return view('admin.roles', compact('roleLists'));
    }

}
