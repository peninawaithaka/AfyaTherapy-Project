@extends('layouts.SAlayout.master')

@section('body')
<div class="px-10 my-4 py-6 rounded shadow-xl bg-white w-4/5 mx-auto">
   
    <div class="mt-2">
        <p class="text-2xl text-gray-700 font-bold hover:text-gray-600" >
            Specialist Info
        </p>
        <p class="mt-2 text-gray-600">
         {{ $bio[0]->title }}
        </p>
        <p class="text-2xl text-gray-700 font-bold hover:text-gray-600" >
            Bio
        </p>
        <p class="mt-2 text-gray-600">
         {{ $bio[0]->bio }}
        </p>
        
    </div>
</div>



@endsection