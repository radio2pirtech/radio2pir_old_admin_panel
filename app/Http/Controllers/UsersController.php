<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::with('roles')->get();
        
        return view('admin.user.list', compact('users'));
    }

    public function add(){
        $roles = Role::get();
        return view('admin.user.add',compact('roles'));
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|integer'
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
        ]);

        return redirect()->route('admin.user')->with('success', 'User created successfully');
    }

    public function edit(int $id)
    {
        $user = User::findOrFail($id);
        $roles = Role::get();
        
        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:users,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $request->id,
            'password' => 'nullable|string|min:8',
            'role' => 'required|integer'
        ]);

        $user = User::findOrFail($validated['id']);

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => $validated['role'],
        ];

        if (!empty($validated['password'])) {
            $data['password'] = Hash::make($validated['password']);
        }

        $user->update($data);

        return redirect()->route('admin.user')->with('success', 'User updated successfully');
    }

    public function delete(int $id)
    {
        if ($id === 1) {
            return redirect()->route('admin.user')->with('danger', 'Deleting superadmin primary account is not allowed.');
        }

        User::findOrFail($id)->delete();

        return redirect()->route('admin.user')->with('success', 'User deleted successfully');
    }
}
