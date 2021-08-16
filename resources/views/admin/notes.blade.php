@extends('layouts.master')

@section('body')
<form method="POST" action="/createnotes">
    @csrf
    <input type="hidden" value={{ $user_id }} name="user_id" />
    <div>
        <label for="notes" class="block text-sm font-medium text-gray-700">
          Diagnostic notes
        </label>
        <div class="mt-1">
          <textarea id="notes" name="notes" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" ></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
          Patient Diagnostic notes
        </p>
      </div>
    <div>
        <label for="treatment" class="block text-sm font-medium text-gray-700">
          Treatment
        </label>
        <div class="mt-1">
          <textarea id="treatment" name="treatment" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" ></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
          Patient Treatment
        </p>
      </div>
 <div>
    <label for="advice" class="block text-sm font-medium text-gray-700">
      Advice
    </label>
    <div class="mt-1">
      <textarea id="advice" name="advice" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" ></textarea>
    </div>
    <p class="mt-2 text-sm text-gray-500">
      Advice given to the patient
    </p>
  </div>
  <button type="submit" class="flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
    Save
  </button>

</form>
   
@endsection
