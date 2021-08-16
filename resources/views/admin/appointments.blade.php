@extends('layouts.master')
@section('body')
    <h3 class="text-gray-700 text-3xl font-medium">Scheduled Appointments</h3>

    <div class="mt-4">
        
        
        <div class="mt-6">
            <div class="bg-white shadow rounded-md overflow-hidden my-6">
                <table class="text-left w-full border-collapse">
                    <thead class="border-b">
                        <tr>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">Therapist</th>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">Patient Name</th>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">Date</th>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">Start Time</th>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">End Time</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">
                                {{ $appointment->therapist }}
                            </td>
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">
                                {{ $appointment->user->name }}
                            </td>
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">
                                {{ $appointment->date }}
                            </td>
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">
                                {{ $appointment->starthours}} : {{ $appointment->startminutes }}
                            </td>
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">
                                {{ $appointment->endhours}} : {{ $appointment->endminutes }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

@endsection