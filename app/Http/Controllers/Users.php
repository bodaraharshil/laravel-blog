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
            // return DB::table('users')
            // ->where('name','demo')
            // ->get();
            
            // return DB::table('users')->count();

            // return DB::table('users')
            // ->insert([
            //     'name'=>'sam',
            //     'email'=>'sam@gmail.com',
            //     'password'=>"123456"
            // ]);

            // return DB::table('users')
            // ->where('name','test')
            // ->update([
            //     'email'=>'test@gmail.com',
            // ]);

            // return DB::table('users')
            // ->where('name','test')
            // ->delete();

            // return DB::table('users')
            // ->sum('id');

            // return DB::table('users')
            // ->max('id');
            
            // return DB::table('users')
            // ->min('id');

            return DB::table('users')
            ->avg('id');

            // return DB::select("select * from users");
    //     $users = DB::select("select * from migrations");
    //     print_r($users);
    }
}
