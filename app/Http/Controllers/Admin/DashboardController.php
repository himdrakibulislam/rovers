<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function users(){
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }
    public function viewuser($id){
        $user = User::find($id);
        return view('admin.users.view',compact('user'));
    }
}
