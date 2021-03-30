<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube extends Controller
{
    // public function index($id)
    // {
    //     return ["id"=>$id,"name"=>"HB_DEVELOPER"];
    // }
    public function index(Request $req)
    {
        print_r($req->fullurl());
        print_r($req->url());
        print_r($req->input());
        print_r($req->method());
    }
}
