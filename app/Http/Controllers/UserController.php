<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
        $user = Auth::user();
        return view('/user/home', compact('user'));
    }
    public function delete($name)
    {
        $user = User::find($name);
        $user->delete();
        return "data berhasil dihapus";
    }
}
