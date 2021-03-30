<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    public function submit(Request $req)
    {
        // $req->validate([
        //     "user"=>"required",
        //     "phone"=>"required || min:8",
        //     "password"=>"required || min:4 || min:8"
        // ]);
        // print_r($req->input());
        // $req->session()->flash('data','data has been submitted');
        // return redirect("/");
    }

    public function dbCheck()
    {
            return DB::select("select * from migrations");
    //     $users = DB::select("select * from migrations");
    //     print_r($users);
    }
}
