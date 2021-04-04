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
        $company1 = new Company;
        $company1->company=$req->company;
        $company1->user_id=$req->user_id;
        if($company1->save())
        {
            return response()->json(["message"=>"Company created successfuly"]);
        }
        else
        {
            return response()->json(["error"=>"Something went wrong"]);
        }
    }
    public function update(Request $req)
    {
        $company =  Company::find($req->id);
        $company->company=$req->company;
        $company->user_id=$req->user_id;
        if($company->save())
        {
            return response()->json(["message"=>"Company updated successfuly","data"=>$company]);
        }
        else
        {
            return response()->json(["error"=>"Something went wrong"]);
        }
        // echo Company ::where('id',$req->user_id)
        // ->update([
        //     'company'=>$req->company
        // ]);
        // $company1 =  Company::find(user_id)
        // $company1->company=$req->company;
        // $company1->user_id=$req->user_id;
        // $company1->save();
    }

    public function delete(Request $req)
    {
        print_r($req->input());
        // $cmp = Company::find($req->id);
        // $cmp->delete();

        $cmp = Company::destroy([4,5]);
    }
}
