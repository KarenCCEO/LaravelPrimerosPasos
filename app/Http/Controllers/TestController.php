<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    function test ()
    {
        $user = User::find(01);
        $name= "este es mi nombre";
        /*var_dump($user);*/
        /*echo "Hola mundito";*/
        
        /* esta es la forma normal->return view ('welcome', ['user' => $user]);
        y con compact podemos reducir el codigo */
        return view ('welcome', compact('user','name'));
        
    }
}
