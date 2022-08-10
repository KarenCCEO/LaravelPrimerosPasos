<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    function test ()
    {
        $user = User::find(01);
        /*var_dump($user);*/
        /*echo "Hola mundito";*/
        return view ('welcome', ['user' => $user]);
        
    }
}
