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
        echo $request->name;
        return Response::json(array('error' => $validator->getMessageBag()->toArray()));


    }
}
