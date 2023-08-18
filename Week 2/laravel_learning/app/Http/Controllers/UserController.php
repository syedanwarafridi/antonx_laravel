<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){
        //Validate Form Data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'cnic' => 'nullable',
            'phone' => 'nullable',
            'gender' => 'required',
            'country' => 'nullable',
            'age' => 'nullable|integer',
            'is_active' => 'required|boolean',
        ]);

        $validatedData['created_at'] = now();
        $validatedData['updated_at'] = now();
        
        User::create($validatedData);

        return 'Data Inserted Successfully.';
    }

    public function total_users(){

        $totalUsers = User::count();
        $totalActiveUsers = User::where('is_active', true)->count();
        $totalInActiveUsers = $totalUsers - $totalActiveUsers;

        $trashedUsers = User::onlyTrashed()->get();
        $users = User::orderBy('created_at', 'desc')->get();

        return view('user_page', compact('totalUsers', 'totalActiveUsers', 'totalInActiveUsers', 'users', 'trashedUsers'));
        }

    public function delete($id){
        $user = User::find($id);
        if ($user){
            $user->delete(); //Soft Deletes the user
        }

        return redirect()->route('totalUsers');
    }

    public function restore($id)
    {
        $user = User::withTrashed()->find($id);

        if ($user) {
            $user->restore(); // Restore the soft deleted user
        }

        return redirect()->route('totalUsers');
    }

}
