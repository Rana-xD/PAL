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
         $name = $request->name;
         $password = $request->password;
         if($name=="worker")
         {
             return view ('TimeManagementIndividual');
         }

    }
}
