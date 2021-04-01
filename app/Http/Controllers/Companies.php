<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Company;

class Companies extends Controller
{
    public function list()
    {
        $data = DB::table('companies')->paginate(2);
        // return $data;
        return view('company',['data' => $data]);
    }
    public function save(Request $req)
    {
        print_r($req->input());
        $company1 = new Company;
        $company1->company=$req->company;
        $company1->user_id=$req->user_id;
        $company1->save();
    }
}
