@extends('layouts.SAlayout.master')

@section('body')

<form method="POST" action="/addbio/{{ $id }}">
    @csrf

    <div class=" row">
        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

        <div class="col-md-6">
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('title') }}" required placeholder="Enter your specilisation">

            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div> 
    </div> 
        
        <div class="form-group row">
            <label for="bio" class="col-md-4 col-form-label text-md-right">{{ __('Bio') }}</label>
        <div class="col-md-6">
            
            <textarea type="bio" name="bio" id="bio" rows="3" class="@error('bio') @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('bio') }}" required placeholder="Enter BIO"></textarea>

            @error('bio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>   
    
    </div>

    <div class="row">

    <button type="submit" class="py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Save
      </button>

    </div>
   
</form>

@endsection