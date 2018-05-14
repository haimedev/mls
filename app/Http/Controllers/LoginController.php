<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Main()
    {
        //return "<h1>qweqwe</h1>";
        return view('page.login_page');
    }

    public function test()
    {
        return "<h1>from test </h1>";
    }
}
