<?php

namespace App\Http\Controllers;

use App\User;
use App\Therapistbio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    //
    public function createTherapist(Request $request)
    {
         User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone_number' => $request['phone'],
            'nationalID' => $request['nationalID'],
            'gender' => $request['gender'],
            'is_admin' => 1,
            'age' => $request['age'],
            'password' => Hash::make($request['password']),
        ]);
        $users = User::where('is_admin',1)->get();
        return view('SuperAdmin.viewtherapist')->with('users', $users);
    }
    public function viewtherapist(){
        $users = User::where('is_admin',1)->get();
        return view('SuperAdmin.viewtherapist')->with('users', $users);


    }

    
    public function addtherapist(){
        return view('SuperAdmin.addtherapist');

    }
    public function addbio($id){
        return view('SuperAdmin.addbio')->with('id',$id);

    }
    public function createbio(Request $request,$id){
        $therapistbio = new Therapistbio;
        $therapistbio->title = $request->input('title');
        $therapistbio->bio = $request->input('bio');
        //get what is submitted to the form
        $therapistbio->user_id = $id;
        $therapistbio->save();
        $users = User::where('is_admin',1)->get();
        return view('SuperAdmin.viewtherapist')->with('users',$users);

    }
    public function viewbio($id){
        // var_dump($id);
        $therapistbio = Therapistbio::where('user_id', $id)->get();
        return view('SuperAdmin.viewbio')->with('bio',$therapistbio);

    }
    public function viewinfo($id){
        $user = User::where('id', $id)->get();
        return view('SuperAdmin.viewinfo')->with('user',$user);

    }
    public function index(){
        $users = User::where('is_admin',1)->count();
        return view('SuperAdmin.index')->with('users', $users);

    }
}
