<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        if($request->hasFile('avatar')){
            $avatar = 'storage/'.$request->file('avatar')->store('avatars');
        }

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'nickname' => $request->nickname,
            'avatar' => $avatar,
            'phone' => $request->phone,
            'sex' => $request->sex,
            'mailing' => $request->mailing,
        ]);

        return redirect()->route('profile',$user->id);
    }
}
