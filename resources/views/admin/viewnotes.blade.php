@extends('layouts.master')

@section('body')
@foreach ($notes as $note)
<div class="px-10 my-4 py-6 rounded shadow-xl bg-white w-4/5 mx-auto">
    <div class="flex justify-between items-center">
        <span class="font-light text-gray-600">{{ $note->created_at }}</span>
    </div>
    <div class="mt-2">
        <p class="text-2xl text-gray-700 font-bold hover:text-gray-600" >
            Diagnosis
        </p>
        <p class="mt-2 text-gray-600">
         {{ $note->notes }}
        </p>
        <p class="text-2xl text-gray-700 font-bold hover:text-gray-600" >
            Treatment
        </p>
        <p class="mt-2 text-gray-600">
         {{ $note->treatment }}
        </p>
        <p class="text-2xl text-gray-700 font-bold hover:text-gray-600" >
            Advice
        </p>
        <p class="mt-2 text-gray-600">
         {{ $note->advice }}
        </p>
    </div>
</div>
@endforeach
@endsection