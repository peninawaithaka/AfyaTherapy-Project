@extends('layouts.app')

@section('content')
     <h1>Create A Story</h1>
     <div class="mx-6">
     {!! Form::open(['action' => 'PostsController@store','method' => 'POST']) !!}

     <div class="form-group">
         {{ Form::label('title','Title') }}
         {{ Form::text('title','',['class' => 'form-control','placeholder' => 'Title']) }}

     </div>
    
     <div class="form-group">
        {{ Form::label('body','Body') }}
        {{ Form::textarea('body','',['class' => 'form-control','placeholder' => 'Body Text']) }}

    </div>
    {{ Form ::submit('Submit', ['class'=>'btn btn-primary']) }}
{!! Form::close() !!}
</div>
@endsection