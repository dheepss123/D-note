<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserInfotmation()
    {
        return view('profile.user-information');
    }
}
