@extends('layouts.app')

@section('content')
<h3 class="text-grey-dark text-sm font-medium font-sans leading-normal">Booked Appointments</h3>
<div class="flex mx-2">
@foreach ($appointments as $appointment)
<div class="shadow rounded to w-full md:w-1/4 border-solid border-t-4 border-grey p-6 my-2 mx-2">
    <form action="/cancelappointment" method="POST">
      @csrf  
    <div class="flex justify-between items-center">
      <h4 class="uppercase text-grey text-xs text-wide tracking-wide font-thin ">Therapist: {{ $appointment->therapist }}</h4>
      <input type="hidden" value={{ $appointment->therapist }}  name="therapist">
      <input type="hidden" value={{ $appointment->session_id }}  name="session_id">
      <input type="hidden" value={{ $appointment->id }}  name="appointment_id">
    </div>
    <h3 class="text-grey-dark text-sm font-medium font-sans leading-normal">Date: {{ $appointment->date }}</h3>
    <input type="hidden" value={{ $appointment->date }}  name="date">
    @if ($appointment->startminutes == 0)
    <h3 class="text-grey-dark text-sm font-medium font-sans leading-normal">Start time: {{ $appointment->starthours }}:{{ $appointment->startminutes }}0 {{ $appointment->startampm }}</h3>
    @else
    <h3 class="text-grey-dark text-sm font-medium font-sans leading-normal">Start time: {{ $appointment->starthours }}:{{ $appointment->startminutes }} {{ $appointment->startampm }}</h3>
    @endif

    <input type="hidden" value={{ $appointment->starttime }}  name="starttime">
    <input type="hidden" value={{ $appointment->starthours }}  name="starthours">
    
    <input type="hidden" value={{ $appointment->startminutes }}  name="startminutes">
    <input type="hidden" value={{ $appointment->startampm }}  name="startampm">
    @if ($appointment->endminutes == 0)
    <h3 class="text-grey-dark text-sm font-medium font-sans leading-normal">End time: {{ $appointment->endhours }}:{{ $appointment->endminutes }}0 {{ $appointment->endampm }}</h3>
    @else
    <h3 class="text-grey-dark text-sm font-medium font-sans leading-normal">End time: {{ $appointment->endhours }}:{{ $appointment->endminutes }} {{ $appointment->endampm }}</h3>
    @endif
    <input type="hidden" value={{ $appointment->endtime }}  name="endtime">
    <input type="hidden" value={{ $appointment->endhours }}  name="endhours">
    <input type="hidden" value={{ $appointment->endminutes }}  name="endminutes">
    <input type="hidden" value={{ $appointment->endampm }}  name="endampm">
    
    
    <button  type="submit" class="flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel Now</button>
    </form>
  </div>
  @endforeach
</div>
@endsection