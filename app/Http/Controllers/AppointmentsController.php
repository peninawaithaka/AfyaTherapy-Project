<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Session;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class AppointmentsController extends Controller
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
    public function bookappoitment(Request $request){
        $appointments = Appointment::get();
        foreach($appointments as $appointment){
            if (($request['starthours'] < $appointment['endhours'] && $request['starthours'] > $appointment['endhours']) || ($request['endhours'] < $appointment['endhours'] && $request['endhours'] > $appointment['starthours'])){
                $sessions = Session::get();
                $appointments = Appointment::get();
                return view('pages.book')->with('sessions', $sessions)->with('appointments',$appointments)->with('bookingerror', 'A session with that time is already booked!');
               
            }
            if($request['starthours'] ==  $appointment['starthours']){
                if(($request['startminutes'] <=  $appointment['endminutes'] && $request['startminutes'] >=  $appointment['startminutes']) || ($request['endminutes'] <=  $appointment['endminutes'] && $request['endminutes'] >=  $appointment['startminutes'])){
                    $sessions = Session::get();
                    $appointments = Appointment::get();
                    return view('pages.book')->with('sessions', $sessions)->with('appointments',$appointments)->with('bookingerror', 'A session with that time is already booked!');
                }
            }
        }
        $appointment=auth()->user()->appointment()->create($request->all());
        $session = Session::find($request->input('session_id'));
        //get what is submitted to the form
        $session->is_booked = 1;
        $session->save();

        // $sessions = Session::where('is_booked', 0)->get();->with('sessions', $sessions)
        $appointments = Appointment::where('user_id', auth()->user()->id)->get();
        return view('pages.appointments')->with('appointments', $appointments);
    }
    
    public function cancelappoitment(Request $request){
        $appointment = Appointment::find($request->input('appointment_id'));
        $appointment->delete();
        $session = Session::find($request->input('session_id'));
        //get what is submitted to the form
        $session->is_booked = 0;
        $session->save();

        $appointments = Appointment::where('user_id', auth()->user()->id)->get();
        return view('pages.appointments')->with('appointments', $appointments);
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
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function show(Appointments $appointments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointments $appointments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointments $appointments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointments $appointments)
    {
        //
    }
}
