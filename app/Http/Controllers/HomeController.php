<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Health;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $health = Health::where('user_id', auth()->user()->id)->get();
        if (count($health) == 0) {
            $displaycreate=true;
        }else{
            $displaycreate=false;
        }
        if (count($health) == 1) {
            $displayview=true;
        }else{
            $displayview=false;
        }
        $user = User::find(auth()->user()->id);
        return view('home')->with('user', $user)->with('displaycreate', $displaycreate)->with('displayview', $displayview);
    }
    
    public function healthcreate()
    {
        return view('pages.healthcreate');
    }
    


    public function viewinfo()
    {
        $health = Health::where('user_id', auth()->user()->id)->get();
        return view('pages.viewhealthinfo')->with('health', $health);
    }
    public function storehealth(Request $request)
    {
        $health=auth()->user()->health()->create($request->all());
        // $health = new Health;
        // //get what is submitted to the form
        // $health->user_id = auth()->user()->id;
        // $health->anxiety = $request->input('anxiety');
        // $health->depression = $request->input('depression');
        // $health->guilt = $request->input('guilt');
        // $health->fear = $request->input('fear');
        // $health->suicidal = $request->input('suicidal');
        // $health->physicalabuse = $request->input('physicalabuse');
        // $health->sexualabuse = $request->input('sexualabuse');
        // $health->psychologicalabuse = $request->input('psychologicalabuse');
        // $health->deprivation = $request->input('deprivation');
        // $health->previouscounselling = $request->input('previouscounselling');
        
        // $health->save();
        // //redirecting with a success message
        return redirect('/home')->with('success','healthinfor Created'); 
    
    }
}
