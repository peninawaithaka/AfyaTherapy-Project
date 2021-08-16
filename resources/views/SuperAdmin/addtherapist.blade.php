@extends('layouts.SAlayout.master')

@section('body')

<form method="POST" action="/createtherapist">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input type="text" name="name" id="Fullname" class="form-control @error('name') is-invalid @enderror mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('name') }}" required placeholder="Enter your name">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input type="text" name="email" id="Email" class="form-control @error('email') is-invalid @enderror mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('email') }}" required placeholder="Enter your Email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

        <div class="col-md-6">

            <input type="number" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required placeholder="Enter your phone no">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="nationalID" class="col-md-4 col-form-label text-md-right">{{ __('NationalID') }}</label>

        <div class="col-md-6">

            <input type="number" name="nationalID" id="ID" class="form-control @error('nationalID') is-invalid @enderror mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required placeholder="Enter your nationalID">
            @error('nationalID')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="Gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

        <div class="col-md-6">

            <select id="myselect" name="gender" class="form-control @error('gender') is-invalid @enderror mt-1 block w-35 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="not_said">Prefer not to say</option>
              </select>
            @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

    </div>
    <div class="form-group row">
        <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

        <div class="col-md-6">
            
            <input type="number" min="0" name="age" id="age" class="form-control @error('age') is-invalid @enderror mt-1 block w-35 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required placeholder="Enter your Date of Birth">
            
            @error('age')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            
        </div>
    </div>
    

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">

            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required placeholder="Enter your password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
           
            <input type="password" name="password_confirmation" type="password" id="password-confirm" class="form-control mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required placeholder="Confirm your password">
        </div>
    </div>

    <div class="form-group row mb-0 mt-2">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Register') }}
              </button>
            
        </div>
    </div>
</form>

@endsection