<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user= User::where('id', Auth::user()->id);
        return view('profile.index',compact('user'));
    }
}
