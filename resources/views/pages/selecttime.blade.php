@extends('layouts.app')

@section('content')  

<h3 class="text-gray-700 text-3xl font-semibold">Select Time</h3>

<div class="flex content-center px-5 py-6 bg-gray-200 text-gray-700 border-b">
    <label class="font-bold mb-1 text-gray-700 block">Time</label>
    <div class="mt-2 mx-2 p-5 w-60 bg-white rounded-lg shadow-xl">
        <label class="text-xs">Start time</label>
        <div class="flex">

          <select name="starthours" class="bg-transparent text-xl appearance-none outline-none">
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            
          </select>
          <span class="text-xl mr-3">:</span>
          <select name="startminutes" class="bg-transparent text-xl appearance-none outline-none mr-4">
            <option value="0">00</option>
            <option value="30">30</option>
          </select>
          {{-- <select name="startampm" class="bg-transparent text-xl appearance-none outline-none">
            <option value="am">AM</option>
            <option value="pm">PM</option>
          </select> --}}
        </div>
    </div>
    


    <div class="mt-2 mx-2 p-5 w-60 bg-white rounded-lg shadow-xl">
        <label class="text-xs">End time</label>
        <div class="flex">

          <select name="endhours" class="bg-transparent text-xl appearance-none outline-none">
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
             
          </select>
          <span class="text-xl mr-3">:</span>
          <select name="endminutes" class="bg-transparent text-xl appearance-none outline-none mr-4">
            <option value="0">00</option>
            <option value="30">30</option>
          </select>
          {{-- <select name="endampm" class="bg-transparent text-xl appearance-none outline-none">
            <option value="am">AM</option>
            <option value="pm">PM</option>
          </select> --}}
        </div>
    </div>
    <div class="flex justify-between items-center px-5 py-3">
        <button class="px-3 py-1 text-gray-700 text-sm rounded-md bg-gray-200 hover:bg-gray-300 focus:outline-none">Cancel</button>
        <button type="submit" class="px-3 py-1 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-500 focus:outline-none">Save</button>
    </div>
</div>

@endsection

