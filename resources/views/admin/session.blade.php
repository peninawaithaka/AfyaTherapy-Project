@extends('layouts.master')

@section('body')
    <h3 class="text-gray-700 text-3xl font-semibold">Forms</h3>

    <div class="mt-4">
        <h4 class="text-gray-600">Model Form</h4>

        <div class="mt-4">
            <div class="max-w-sm w-full bg-white shadow-md rounded-md overflow-hidden border">
                <form action="/createsessions" method="POST">
                    @csrf
                    <div class="flex justify-between items-center px-5 py-3 text-gray-700 border-b">
                        <h3 class="text-sm">Add session</h3>
                        <button>
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>


                    <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b">
                        <div class="antialiased sans-serif">
                            <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                                <div class="container mx-auto px-4 py-2 md:py-10">
                                    <div class="mb-5 w-64">
                      
                                        <label for="datepicker" class="font-bold mb-1 text-gray-700 block">Day</label>
                                        <div class="relative">
                                            <input type="hidden" name="date" x-ref="date">
                                            <input 
                                                type="text"
                                                readonly
                                                name="date"
                                                x-model="datepickerValue"
                                                @click="showDatepicker = !showDatepicker"
                                                @keydown.escape="showDatepicker = false"
                                                class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                                placeholder="Select date">
                                                
                                                <div class="absolute top-0 right-0 px-3 py-2">
                                                    <svg class="h-6 w-6 text-gray-400"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                    </svg>
                                                </div>
                      
                      
                                                <!-- <div x-text="no_of_days.length"></div>
                                                <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                                                <div x-text="new Date(year, month).getDay()"></div> -->
                      
                                                <div 
                                                    class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0" 
                                                    style="width: 17rem" 
                                                    x-show.transition="showDatepicker"
                                                    @click.away="showDatepicker = false">
                      
                                                    <div class="flex justify-between items-center mb-2">
                                                        <div>
                                                            <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                                            <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                                        </div>
                                                        <div>
                                                            <button 
                                                                type="button"
                                                                class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
                                                                :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                                :disabled="month == 0 ? true : false"
                                                                @click="month--; getNoOfDays()">
                                                                <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                                                </svg>  
                                                            </button>
                                                            <button 
                                                                type="button"
                                                                class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
                                                                :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                                :disabled="month == 11 ? true : false"
                                                                @click="month++; getNoOfDays()">
                                                                <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                                </svg>									  
                                                            </button>
                                                        </div>
                                                    </div>
                      
                                                    <div class="flex flex-wrap mb-3 -mx-1">
                                                        <template x-for="(day, index) in DAYS" :key="index">	
                                                            <div style="width: 14.26%" class="px-1">
                                                                <div
                                                                    x-text="day" 
                                                                    class="text-gray-800 font-medium text-center text-xs"></div>
                                                            </div>
                                                        </template>
                                                    </div>
                      
                                                    <div class="flex flex-wrap -mx-1">
                                                        <template x-for="blankday in blankdays">
                                                            <div 
                                                                style="width: 14.28%"
                                                                class="text-center border p-1 border-transparent text-sm"	
                                                            ></div>
                                                        </template>	
                                                        <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">	
                                                            <div style="width: 14.28%" class="px-1 mb-1">
                                                                <div
                                                                    @click="getDateValue(date)"
                                                                    x-text="date"
                                                                    class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                                    :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"	
                                                                ></div>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </div>
                      
                                        </div>	 
                                    </div>
                      
                                </div>
                            </div>
                      
                            <script>
                                const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                                const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                      
                                function app() {
                                    return {
                                        showDatepicker: false,
                                        datepickerValue: '',
                      
                                        month: '',
                                        year: '',
                                        no_of_days: [],
                                        blankdays: [],
                                        days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                      
                                        initDate() {
                                            let today = new Date();
                                            this.month = today.getMonth();
                                            this.year = today.getFullYear();
                                            this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                                        },
                      
                                        isToday(date) {
                                            const today = new Date();
                                            const d = new Date(this.year, this.month, date);
                      
                                            return today.toDateString() === d.toDateString() ? true : false;
                                        },
                      
                                        getDateValue(date) {
                                            let selectedDate = new Date(this.year, this.month, date);
                                            this.datepickerValue = selectedDate.toDateString();
                      
                                            this.$refs.date.value = selectedDate.getFullYear() +"-"+ ('0'+ selectedDate.getMonth()).slice(-2) +"-"+ ('0' + selectedDate.getDate()).slice(-2);
                      
                                            console.log(this.$refs.date.value);
                      
                                            this.showDatepicker = false;
                                        },
                      
                                        getNoOfDays() {
                                            let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();
                      
                                            // find where to start calendar day of week
                                            let dayOfWeek = new Date(this.year, this.month).getDay();
                                            let blankdaysArray = [];
                                            for ( var i=1; i <= dayOfWeek; i++) {
                                                blankdaysArray.push(i);
                                            }
                      
                                            let daysArray = [];
                                            for ( var i=1; i <= daysInMonth; i++) {
                                                daysArray.push(i);
                                            }
                      
                                            this.blankdays = blankdaysArray;
                                            this.no_of_days = daysArray;
                                        }
                                    }
                                }
                            </script>
                             <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b">
                                <label class="font-bold mb-1 text-gray-700 block">Time</label>
                                <div class="mt-2 p-5 w-60 bg-white rounded-lg shadow-xl">
                                    <label class="text-xs">Start time</label>
                                    <div class="flex">

                                      <select name="starthours" class="bg-transparent text-xl appearance-none outline-none">
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        
                                      </select>
                                      <span class="text-xl mr-3">:</span>
                                      <select name="startminutes" class="bg-transparent text-xl appearance-none outline-none mr-4">
                                        <option value="0">00</option>
                                        <option value="30">30</option>
                                      </select>
                                      {{-- <select name="startampm" class="bg-transparent text-xl appearance-none outline-none">
                                        <option value="am">AM</option>
                                        <option value="pm">PM</option>
                                      </select> --}}
                                    </div>
                                </div>
                                
        
                       
                                <div class="mt-2 p-5 w-60 bg-white rounded-lg shadow-xl">
                                    <label class="text-xs">End time</label>
                                    <div class="flex">

                                      <select name="endhours" class="bg-transparent text-xl appearance-none outline-none">
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                         
                                      </select>
                                      <span class="text-xl mr-3">:</span>
                                      <select name="endminutes" class="bg-transparent text-xl appearance-none outline-none mr-4">
                                        <option value="0">00</option>
                                        <option value="30">30</option>
                                      </select>
                                      {{-- <select name="endampm" class="bg-transparent text-xl appearance-none outline-none">
                                        <option value="am">AM</option>
                                        <option value="pm">PM</option>
                                      </select> --}}
                                    </div>
                                </div>
                                <div class="flex justify-between items-center px-5 py-3">
                                    <button class="px-3 py-1 text-gray-700 text-sm rounded-md bg-gray-200 hover:bg-gray-300 focus:outline-none">Cancel</button>
                                    <button type="submit" class="px-3 py-1 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-500 focus:outline-none">Save</button>
                                </div>
                            </div>
                          </div>
                      </div>
                       
                    </div>
                   
                </form>
            </div>
        </div>
    </div>

    
@endsection










