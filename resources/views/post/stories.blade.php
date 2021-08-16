@extends('layouts.app')

@section('content')
<h1>Success Stories</h1>
     @if (count($posts) > 0)
     <div class="flex">
       @forelse ($posts as $post)

      
       <div class="shadow rounded to w-full md:w-1/4 border-solid border-t-4 border-grey p-6 mx-2 my-2">
         <h3><a href="/showpost/{{ $post->id }}">{{ $post->title }}</a></h3>
         <small>Written on{{ $post->created_at }}</small>
     </div>
       @endforeach
    @else
        <p>No Posts Found</p>
            
     @endif
@endsection