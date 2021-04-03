<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Company;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;

class Users extends Controller
{

    function list()
    {
        $userdata =  User::all();
        return response()->json(["message"=>"get data successfuly","data" => $userdata]);
    }
    public function index(Request $req)
    {
        // echo $req->file('user_image')->store('public');
        return User::find(2)->myCmp;
        // $data = [
        //     'name'=>'test@gmail.com',
        //     'head'=>'<h1>Hello Test</h1>'
        // ];
        // return view('User',['data' => $data]);
        // $req->validate([
        //     "user"=>"required",
        //     "phone"=>"required || min:8",
        //     "password"=>"required || min:4 || min:8"
        // ]);
        // print_r($req->input());
        // $req->session()->flash('data','data has been submitted');
        // return redirect("/");
    }
    public function exportdata()
    {   
        return Excel::download(new DataExport , 'users.xlsx');
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

            // return DB::table('users')
            // ->avg('id');

            // return DB::select("select * from users");
            // $users = DB::select("select * from migrations");
            // print_r($users);

            // return  DB::table('users')
            // ->Select('companys.company','users.email')
            // ->join('companys','users.id','user_id')
            // ->where('companys.company','global-1')
            // ->get();
            
            // return Company::all();
    }
}

class DataExport implements FromCollection{
    function collection()
    {
        return User::all();
    }
}