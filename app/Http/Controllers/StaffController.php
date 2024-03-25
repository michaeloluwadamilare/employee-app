<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;


class StaffController extends Controller
{
    //
    public function index()
    {
        $staffList = DB::table('users')
            ->join('roles', 'users.roles_id', '=', 'roles.id')
            ->select('users.*', 'roles.role_name')
            ->get();
        $roleList = Role::all();
        return view('admin.staff', compact('staffList','roleList'));

    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'job_description' => ['required', 'string', 'max:255'],
            'status' => 'required|in:Active,Deactivate',
            'roles_id' => 'required|exists:roles,id',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('1234'),
            'job_description' => $request->job_description,
            'roles_id' => $request->roles_id,
            'status' => $request->status,
        ]);

        event(new Registered($user));

        return redirect()->route('staff-lists')->with('success', 'Staff added successfully and default password is 1234!');

    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255',Rule::unique('users')->ignore($id)],
            'job_description' => ['required', 'string', 'max:255'],
            'status' => 'required|in:Active,Deactivate',
            'roles_id' => 'required|exists:roles,id',
        ]);

        $user->name = $request->name;
        $user->status = $request->status;
        $user->job_description = $request->job_description;
        $user->email = $request->email;
        $user->roles_id = $request->roles_id;

        $user->save();

        
        return redirect()->route('staff-lists')->with('success', 'Staff data updated successfully!');

    }

    public function delete(string $id)
    {
        $user = User::findOrFail($id);
        $user->status = 'Deactivated';
        $user->save();

        return redirect()->route('staff-lists')->with('success', 'User deleted successfully!');

    }

}
