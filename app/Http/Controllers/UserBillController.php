<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request as Irequest;
use App\Bill;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserBillController extends Controller
{   

    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $this->validate($request,[
                'customerId'=> 'required|min:10|max:10'
            ]);
            $bill = new Bill;
            $bill->customerId=Irequest::get("customerId");
            $bill->initial=Irequest::get("initial");
            $bill->final=Irequest::get("final");
            $bill->month=Irequest::get("month");
            $bill->year=Irequest::get("year");
            $bill->units=(integer)$bill->final-(integer)$bill->initial;
            $admin=DB::table('admins')->first();
            $rate=$admin->rate;
            $bill->amount=$bill->units * $rate;
            $bill->status="Unpaid";
            $bill->save();
        }
        return view('success');
    }

    public function create(Request $request)
    {


        $data = Bill::find
        ($request->bills);
        $data->bills = $request->bills;
        $data->save();

      
        // return view ('userbill', ['data' => $data]);
        return view ('userbill', compact('data'));
    }

    

    public function data(){

      
        $data = DB::select('select * from bills');
        return view('userbill',['data'=>$data]);
        }
}

?>