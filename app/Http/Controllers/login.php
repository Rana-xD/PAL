<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use View;

class login extends Controller
{
    public function login(Request $request)
    {
      $this->validate($request, [
     'name' => 'required',
     'password' => 'required',
        ]);
         $name = $request->name;
         $password = $request->password;

         if(($name=="worker") || ($name=="Worker"))
         {
             return view ('TimeManagementIndividual');
         }
         else if (($name=="manager") || ($name=="Manager"))
         {
             session_start();
             $_SESSION['role'] = 'manager';
             return view ('time_management_any_location');
         }
         else if (($name=="admin") || ($name=="Admin")) {
             session_start();
             $_SESSION['role'] = 'admin';
             return view ('time_management_any_location');
         }
         else {
             return redirect('/');
         }

    }
}
