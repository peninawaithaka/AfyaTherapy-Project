@extends('layouts.master')

@section('body')
    <h3 class="text-gray-700 text-3xl font-medium">Patient names</h3>

    <div class="mt-4">
        <h4 class="text-gray-600">Profiles</h4>
        
        <div class="mt-6">
            <div class="bg-white shadow rounded-md overflow-hidden my-6">
                <table class="text-left w-full border-collapse">
                    <thead class="border-b">
                        <tr>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">Patient</th>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">Actions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">
                                {{ $user->name }}
                            </td>
            <td class="py-4 px-6 border-b text-gray-700 text-lg">
                {{-- <button class="px-3 py-3 bg-green-600 rounded-md text-white font-medium tracking-wide hover:bg-green-500 ms-3">view</button> --}}
                <a href="/notes/{{ $user->id }}/users" class="px-3 py-3 bg-blue-600 rounded-md text-white font-medium tracking-wide hover:bg-blue-500 ms-3">Take notes</a>
                <a href="/viewnotes/{{ $user->id }}/users" class="px-3 py-3 bg-blue-600 rounded-md text-white font-medium tracking-wide hover:bg-blue-500 ms-3">View notes</a>
                <a href="/review/{{ $user->id }}/users" class="px-3 py-3 bg-blue-600 rounded-md text-white font-medium tracking-wide hover:bg-blue-500 ms-3">Review patient</a>
                {{-- <button class="px-3 py-3 bg-red-600 rounded-md text-white font-medium tracking-wide hover:bg-red-500 ms-3">Delete</button> --}}
                        
                                                        
         </td>
                                                    
            </tr>
                      @endforeach
                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

@endsection
