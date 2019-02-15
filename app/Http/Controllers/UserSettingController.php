<?php

namespace App\Http\Controllers;
use App\User;
use Auth;

use Illuminate\Http\Request;


class UserSettingController extends Controller
{
    public function form()
    {
    	$data = User::where('id',Auth::id())->first();
    	return view('admin.pages.user.setting',['dt'=>$data]);
    }

    public function update()
    {
    	return "Fungsi Update";
    }
}

    	
    