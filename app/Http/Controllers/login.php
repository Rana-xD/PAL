<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

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
             return view ('time_management_any_location',['role' => 'manager']);
         }
         else if (($name=="admin") || ($name=="Admin")) {
             return view ('time_management_any_location',['role' => 'admin']);
         }
         else {
             return redirect('/');
         }

    }
}
