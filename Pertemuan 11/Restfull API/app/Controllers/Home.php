<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        var_dump(db_connect('default')->table('users')->get()->getResult());
        return view('welcome_message');
    }
}
