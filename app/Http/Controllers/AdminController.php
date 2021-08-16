<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Note;
use App\Appointment;
Use Sentiment\Analyzer;

class AdminController extends Controller
{
    public function dashboard(){
        $users = User::where('is_admin',0)->count();
        $appointments = Appointment::count();
        return view('admin.index')->with('users', $users)->with('appointments',  $appointments);
    }
    
    public function usersprofiles(){
        $users = User::where('is_admin',0)->get();
        return view('admin.users')->with('users', $users);
    }
    public function reviewpatient($id){
        $notes = Note::where('user_id',$id)->get(['notes']);
        $updatednotes = [];
        foreach($notes as $note){
        $updatednotes[] = $note["notes"];
        }
        $analyzer = new Analyzer();
        //Print results
        $totalscores = [];
        foreach($updatednotes as $note) {
        $totalscores[$note] = $analyzer->getSentiment($note);
        }
        //  var_dump($totalscores);
    foreach($totalscores as $key => $val){
        if($val['compound'] > 0.5){
            $totalscores[$key] = 'positive';
        }else{
            $totalscores[$key] = 'negative';
        }
    }
        
    return view('admin.patientsreview')->with('totalscores', $totalscores);
    }
    
    public function appointments(){
        $appointments = Appointment::get();
        return view('admin.appointments')->with('appointments',  $appointments);
    }

    public function sessions(){
        return view('admin.session');
    }

    

    public function notes($id){
        return view('admin.notes')->with('user_id', $id);
    }
    
    public function viewnotes($id){
        $notes = Note::where('user_id', $id)->get();
        return view('admin.viewnotes')->with('notes', $notes);
    }
    
    public function createnotes(Request $request){
        $note = new Note;
        //get what is submitted to the form
        $note->user_id = $request->input('user_id');
        $note->notes= $request->input('notes');
        $note->treatment = $request->input('treatment');
        $note->advice = $request->input('advice');
        $note->save();
        $notes = Note::where('user_id', $note->user_id)->get();
        return view('admin.viewnotes')->with('notes', $notes);
    }
    public function createsessions(Request $request){
        $session=auth()->user()->session()->create($request->all());
        return view('admin.session');
    }
    
}
