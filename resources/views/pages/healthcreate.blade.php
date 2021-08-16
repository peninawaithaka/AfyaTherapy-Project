@extends('layouts.app')

@section('content')
 <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-none md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h2 class="text-lg font-medium leading-6 text-gray-900">Mental Health Information</h2>
             </div>
      </div>
      <div class="md:mt-0 md:col-span-2">
        <form action="/healthinfo" method="POST">
            @csrf
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
              <fieldset>
                <legend class="text-base font-medium text-gray-900">Current symptoms (check all that apply)</legend>
                <div class="mt-4 space-y-4">
                  <div class="flex items-start">
                    <div class="flex items-center h-5">
                      <input id="symptoms" name="anxiety" value="yes" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="comments" class="font-medium text-gray-700">Anxiety Attacks</label>
                      </div>
                  </div>
                  <div class="flex items-start">
                    <div class="flex items-center h-5">
                      <input id="symptoms" name="depression" value="yes" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="comments" class="font-medium text-gray-700">Depression</label>
                      </div>
                  </div>
                  <div class="flex items-start">
                    <div class="flex items-center h-5">
                      <input id="symptoms" name="guilt" value="yes" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="comments" class="font-medium text-gray-700">Guilt</label>
                      </div>
                  </div>
                  <div class="flex items-start">
                    <div class="flex items-center h-5">
                      <input id="symptoms" name="fear" value="yes" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="symptoms" class="font-medium text-gray-700">Constant Fear</label>
                      </div>
                  </div>
                  <div class="flex items-start">
                    <div class="flex items-center h-5">
                      <input id="symptoms" name="suicidal" value="yes" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="symptoms" class="font-medium text-gray-700">Suicidal</label>
                      </div>
                  </div>

                </div>

             <legend class="text-base font-medium text-gray-900">Type of abuse (check all that apply)</legend>
                    <div class="mt-4 space-y-4">
                            <div class="flex items-start">
                              <div class="flex items-center h-5">
                                <input id="symptoms" name="physicalabuse" value="yes" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                              </div>
                              <div class="ml-3 text-sm">
                                <label for="comments" class="font-medium text-gray-700">Physical abuse</label>
                                </div>
                            </div>
                            <div class="flex items-start">
                              <div class="flex items-center h-5">
                                <input id="symptoms" name="sexualabuse" value="yes" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                              </div>
                              <div class="ml-3 text-sm">
                                <label for="comments" class="font-medium text-gray-700">Sexual Abuse</label>
                                </div>
                            </div>
                            <div class="flex items-start">
                              <div class="flex items-center h-5">
                                <input id="symptoms" name="psychologicalabuse" value="yes" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                              </div>
                              <div class="ml-3 text-sm">
                                <label for="comments" class="font-medium text-gray-700">Psychological Abuse</label>
                                </div>
                            </div>
                            <div class="flex items-start">
                              <div class="flex items-center h-5">
                                <input id="symptoms" name="deprivation" value="yes" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                              </div>
                              <div class="ml-3 text-sm">
                                <label for="symptoms" class="font-medium text-gray-700">Deprivation</label>
                                </div>
                            </div>

                          </div>

              <legend class="text-base font-medium text-gray-900">Have you received previous counselling</legend>
                      <div class="mt-4 space-y-4">
                                      <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                          <input id="symptoms" name="previouscounselling" value="yes" type="radio" class="form-radio focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                          <label for="comments" class="font-medium text-gray-700">Yes</label>
                                          </div>
                                      </div>
                                      <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                          <input id="symptoms" name="previouscounselling" value="no" type="radio" class="form-radio focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                          <label for="comments" class="font-medium text-gray-700">No</label>
                                          </div>
                                      </div>      
                          </div>
      
            <div>
              <button type="submit" class="flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
              </button>
            </div>
          </div>
        </form>
       
  
          
        </div>
      </div>
    </div>
  </div>
 
<div>
  
  @endsection