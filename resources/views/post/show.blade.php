@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/posts" class="py-3 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"> Go Back</a>
     <h1 class="my-4">{{ $post->title }}</h1>
     
     <div>
         {{ $post->body }}
     </div>
     <hr>
     <small>Written on {{ $post->created_at }}</small>

     <hr>
     <a href="/editpost/{{ $post->id }}/edit" class="btn btn-success my-2">Edit</a>

     {!! Form::open(['action'=>['PostsController@destroy', $post->id,'method'=>'POST','class'=>'pull-right']]) !!}
           {!! Form::hidden('_method','DELETE') !!}
           {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
     {!! Form::close() !!}
    </div>
@endsection