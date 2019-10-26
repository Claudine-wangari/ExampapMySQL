<?php

namespace App\Http\Controllers;

use App\Administrator;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   public function login(Request $request)
   {

       $Rpass= bcrypt($request->password);
       $email = DB::table('users')->select('email')->where('email', '=', $request->email);
       $pass= DB::table('users')->select('password')->where('password', '=', $Rpass );
       $role = DB::table('users')->select('role')->where('email', '=', $email );


       if($pass == True)
       {
            if($role)
            {

                return view('student.Student');
            }
            else
             {

                 return view('admin.Dashboard');
             }
       }
       else
       {
           return "something is up";
       }

   }
}
