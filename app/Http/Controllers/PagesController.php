<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use App\Appointment;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        
        return view('pages.index');
    }

    public function storiespost(){
        $posts = Post::get();
        return view('post.stories')->with('posts', $posts);
    }

    public function login(){
        
        return view('pages.login');
    }

    public function register(){
        return view('pages.register');
    }

    public function appointments(){
        $appointments = Appointment::where('user_id', auth()->user()->id)->get();
        return view('pages.appointments')->with('appointments', $appointments);
    }
    public function book(){
        $bookingerror = null;
        $sessions = Session::get();
        $appointments = Appointment::get();
        return view('pages.book')->with('sessions', $sessions)->with('appointments',$appointments)->with('bookingerror', $bookingerror);
    }
    public function selecttime(){
       
        return view('pages.selecttime');
    }
    public function engage(){
       
        return view('pages.engage');
    }


    public function postform(){
        return view('post.create');
    }

    public function storieslist(){
        $posts = Post::where('user_id',auth()->user()->id)->get();
        // var_dump($posts);
        return view('post.index')->with('posts', $posts);
    }
    
    public function showpost($id){
        $post = Post::find($id);
        // var_dump($posts);
        return view('post.show')->with('post', $post);
    }

    
    public function editpost($id){
        $post = Post::find($id);
        return view('post.edit')->with('post', $post); 
    }

    public function landing(){
       
        return view('pages.index');
    }
}
