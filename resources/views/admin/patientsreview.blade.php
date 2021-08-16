@extends('layouts.master')

@section('body')

@foreach ($totalscores as $key => $totalscore)
<div class="px-10 my-4 py-6 rounded shadow-xl bg-white w-4/5 mx-auto">
    <div class="mt-2">
        <p class="mt-2 text-gray-600">
            {{ $key }}
        </p>
        <p class="text-2xl text-gray-700 font-bold hover:text-gray-600">
         {{ $totalscore }}
        </p>
    </div>
</div>
@endforeach

@endsection