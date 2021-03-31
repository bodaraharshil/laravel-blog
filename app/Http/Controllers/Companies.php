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
}
