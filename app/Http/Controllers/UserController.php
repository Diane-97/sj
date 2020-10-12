<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('profile');
    }
    public function updateProfile(Request $request){

        $user_id=Auth::user()->id;
        $user=User::findOrFail($user_id);
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user_id,

        ]);
        $user->name=$request['name'];
        $user->email=$request['email'];

        if(!empty($request->password)){
            $user->password= Hash::make($request['password']);
        }

        $user->update();
       return redirect()->back()->with('status','updated successfully');


    }
}
