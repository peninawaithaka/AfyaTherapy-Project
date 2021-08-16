@extends('layouts.SAlayout.master')

@section('body')

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
@if (!$user->therapistbio)
<a href="/addbio/{{ $user->id }}/users" class="px-3 py-3 bg-blue-600 rounded-md text-white font-medium tracking-wide hover:bg-blue-500 ms-3">Add Bio</a>
@endif
@if ($user->therapistbio)
<a href="/viewbio/{{ $user->id }}/users" class="px-3 py-3 bg-blue-600 rounded-md text-white font-medium tracking-wide hover:bg-blue-500 ms-3">View Bio</a>
@endif
<a href="/viewinfo/{{ $user->id }}/users" class="px-3 py-3 bg-blue-600 rounded-md text-white font-medium tracking-wide hover:bg-blue-500 ms-3">View Info</a>
{{-- <button class="px-3 py-3 bg-red-600 rounded-md text-white font-medium tracking-wide hover:bg-red-500 ms-3">Delete</button> --}}
        
                                        
</td>
                                    
</tr>
      @endforeach
     
    </tbody>
</table>


@endsection

