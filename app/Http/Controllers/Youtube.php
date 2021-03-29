<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube extends Controller
{
    public function index($id)
    {
        return ["id"=>$id,"name"=>"HB_DEVELOPER"];
    }
}
