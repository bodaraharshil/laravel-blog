<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function submit(Request $req)
    {
        print_r($req->input());
    }
}
