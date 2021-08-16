@extends('layouts.app')

@section('content')
<h3 class="text-grey-dark text-sm font-medium font-sans leading-normal">Book Sessions</h3>
@if ($bookingerror)
<span class="text-red-400">
  <strong>{{ $bookingerror }}</strong>
</span>
@endif
<div class="flex mx-2">

@foreach ($sessions as $session)
<div class="shadow rounded to w-full md:w-1/4 border-solid border-t-4 border-grey p-6 mx-2 my-2">
    <form action="/bookappointment" method="POST">
      @csrf  
    <div class="flex justify-between items-center">
      <h4 class="uppercase text-grey text-xs text-wide tracking-wide font-thin ">Therapist: {{ $session->user->name }}</h4>
      <input type="hidden" value={{ $session->user->name }}  name="therapist">
      <input type="hidden" value={{ $session->id }}  name="session_id">
    </div>
    <h3 class="text-grey-dark text-sm font-medium font-sans leading-normal">Date: {{ $session->date }}</h3>
    <input type="hidden" value={{ $session->date }}  name="date">
    <h3 class="text-grey-dark text-sm font-medium font-sans leading-normal">Start time: {{ $session->starthours }}:{{ $session->startminutes }}0</h3>
    <input type="hidden" value={{ $session->starttime }}  name="starttime">
    <input type="hidden" value={{ $session->starthours }}  name="starthours">
    <input type="hidden" value={{ $session->startminutes }}  name="startminutes">
    <h3 class="text-grey-dark text-sm font-medium font-sans leading-normal">End time: {{ $session->endhours }}:{{ $session->endminutes }}0</h3>
    <input type="hidden" value={{ $session->endtime }}  name="endtime">
    <input type="hidden" value={{ $session->endhours }}  name="endhours">
    <input type="hidden" value={{ $session->endminutes }}  name="endminutes">

    <h3 class="text-indigo-600 text-lg font-medium font-sans leading-normal">Booked Sessions</h3>
    @foreach ($appointments as $appointment)
    @if ($session->id == $appointment->session_id)
    <h3 class="text-grey-dark text-sm font-medium font-sans leading-normal">Start time: {{ $appointment->starthours }}:{{ $appointment->startminutes }}</h3>
    <h3 class="text-grey-dark text-sm font-medium font-sans leading-normal">End time: {{ $appointment->endhours }}:{{ $appointment->endminutes }}</h3>
    
    @endif
    @endforeach

    
    <h3 class="text-gray-700">Select Time</h3>

<div class="flex content-center px-4 py-2 bg-gray-200 text-gray-700 border-b">
    <div class="mt-1 p-1 w-20 bg-white rounded-lg shadow-xl">
        <label class="text-xs">Start time</label>
        <div class="flex">

          <select name="starthours" class="bg-transparent text-xl appearance-none outline-none">
            @for ($i = $session->starthours ; $i <  $session->endhours ; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
            @endfor
          </select>
          <span class="text-xl mr-3">:</span>
          <select name="startminutes" class="bg-transparent text-xl appearance-none outline-none mr-4">
            <option value="00">00</option>
            <option value="15">15</option>
            <option value="30">30</option>
            <option value="45">45</option>
          </select>
          {{-- <select name="startampm" class="bg-transparent text-xl appearance-none outline-none">
            <option value="am">AM</option>
            <option value="pm">PM</option>
          </select> --}}
        </div>
    </div>
    


    <div class="mt-1 mx-2 p-1 w-20 bg-white rounded-lg shadow-xl">
        <label class="text-xs">End time</label>
        <div class="flex">


          <select name="endhours" class="bg-transparent text-xl appearance-none outline-none">
            @for ($i = $session->starthours ; $i <  $session->endhours ; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
            @endfor

             
          </select>
          <span class="text-xl mr-3">:</span>
          <select name="endminutes" class="bg-transparent text-xl appearance-none outline-none mr-4">
            <option value="00">00</option>
            <option value="15">15</option>
            <option value="30">30</option>
            <option value="45">45</option>
          </select>
          {{-- <select name="endampm" class="bg-transparent text-xl appearance-none outline-none">
            <option value="am">AM</option>
            <option value="pm">PM</option>
          </select> --}}
        </div>
    </div>
</div>

    
    <button  type="submit" class="flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Book Now</button>
    </form>
  </div>
  @endforeach
</div>
@endsection