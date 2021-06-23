<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        $phoneLink = preg_replace('/[^0-9]/', '', $user->phone);
        return view('profile',compact('user','phoneLink'));
    }
}
