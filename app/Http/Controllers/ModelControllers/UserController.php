<?php

namespace App\Http\Controllers\ModelControllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController
{
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public static function getUser($email,$pass){
        $user = DB::table('users')->where('email',$email)->get()->first();
        if($user){
            if (Hash::check($pass, $user->password))
            {
                return $user;
            }
        }
        return false;
    }
    public static function getUserById($userid){
        $user = DB::table('users')->where('userId',$userid)->get()->first();
        return $user;
    }
    public static function saveUser(Request $req,$name,$email,$mobile,$pass,$add){
        
        if($name && $email && $mobile && $pass && $add){

            $status = UserController::checkUser($email);
            if($status){
                $req->session()->flash('error','User with this email already exist!');
                return false;
            }else{
                if(strlen($mobile)>10){
                    $req->session()->flash('error','Mobile number should be 10 digit!');
                    return false;
                }
                //hashing pass
                $pass = Hash::make($pass);

                $usr = new User();
                $usr->name=$name;
                $usr->email=$email;
                $usr->mobile=$mobile;
                $usr->password=$pass;
                $usr->address=$add;
                $usr->save();
                $req->session()->flash('success','User successfully registered!');
                return true;
            }
        }else{
            $req->session()->flash('error','All the fields are mandatory!');
            return false;
        }
    }

    static function checkUser($email){
        $usr = User::all()->where('email',$email)->first();
        if($usr){
            return true;
        }
        else{
            return false;
        }
    }
}
