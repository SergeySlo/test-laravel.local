<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(LoginRequest $request)
    {
        if($request->hasFile('avatar')){
            $avatar = 'storage/'.$request->file('avatar')->store('avatars');
        }else{
            $avatar = null;
        }

        if(isset($request->mailing)){
            $mailing = $request->mailing;
        }else{
            $mailing = 0;
        }

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'nickname' => $request->nickname,
            'avatar' => $avatar,
            'phone' => $request->phone,
            'sex' => $request->sex,
            'mailing' => $mailing,
        ]);

        return redirect()->route('profile',$user->id);
    }
}
