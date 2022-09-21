<?php

namespace App\Http\Controllers;

use App\Bill;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserBillController extends Controller
{
    public function create(Request $request)
    {
        // $student = Student::create([
        //     'name' => $request->name,
        //     'email' => $request->email
        // ]);

        //alternatively,

        $data = Bill::find
        ($request->bills);
        $data->bills = $request->bills;
        $data->save();

        return view('userbill',$data);

    }

    

    public function data()
    { 
        
        $user = User::find(1);
        // $s=Auth::user()->customerId;
        $data['data']=DB::table('bills')->where('customerId')->get();
        return view('userbill',$data);
    }
}

?>