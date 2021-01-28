<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class admin_controller extends Controller
{
    function allUsers(){
        $users = DB::table('users')->get();
        return view('adminlte.admin', ['users'=>$users]);
    }

    public function edit($id){
        $user = User::find($id);
        return view('/adminlte.mypage')->with('user', $user);
    }

    public function deleteUser($id){
        $users = DB::table('users')
        ->where(['id' => $id])
        ->delete();

        return redirect('/admin');
    }
}