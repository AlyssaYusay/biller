<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\User;
 
class UserController extends Controller
{
    // public function create(Request $request)
    // {
    //     // $student = Student::create([
    //     //     'name' => $request->name,
    //     //     'email' => $request->email
    //     // ]);

    //     //alternatively,

    //     $user = new User;
    //     $user->customerId = $request->customerId;
    //     $user->name = $request->name;
    //     $user->save();

    //     return redirect()->route('home')->with('success', 'New user added.');

    // }

    public function data(Request $request)
    {
        $user = User::find(1);
  
        return view('data');
    }

    public function update(Request $request){
        $user = User::find($request->user_id);
        $user->customer = $request->customerId;
        $user->name = $request->name;
       
        $user->save();

        return redirect()->route('data')->with('success', 'User updated.');
    }

    public function delete(Request $request){
        
        $user = User::find($request->user_id);
        $username = $user->name;
        $user->delete();

        return redirect()->route('data')->with('deleted', $username.' has been deleted.');
    }
}

?>