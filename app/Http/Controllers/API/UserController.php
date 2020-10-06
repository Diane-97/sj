<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requests
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $user = Auth::user();
        $this->validate(request(), [
            'name' => 'sometimes',
            'email' => 'sometimes|email|unique:users,email,'.$user->id,
            'phone' => 'sometimes|phone|unique:users,phone,'.$user->id,
            'password' => 'sometimes',
            'photo' => 'sometimes',
            'role' => 'sometimes',
        ]);

        $user->name = request('name');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->role = request('role');
        $user->photo = request('photo');
        $user->password = bcrypt(request('password'));

        $user->save();

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('profile', compact('user'));
    }

   
}
