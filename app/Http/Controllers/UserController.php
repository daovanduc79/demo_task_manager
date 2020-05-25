<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->middleware('auth');
        $this->user = $user;
    }

    public function getAll()
    {
        $users = $this->user->all();
        return view('users.list', compact('users'));
    }

    public function showFormChangePassword($id)
    {
        $user = $this->user->findOrFail($id);
        return view('users.change-password', compact('user'));
    }

    public function changePassword(Request $request, $id)  {
        $user = $this->user->findOrFail($id);
        $user->password = Hash::make($request->password);
        $user->save();
        session()->flash('success', 'change password success!');
        return redirect()->route('users.index');
    }
}
