<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;

class Appointment extends Model
{
    protected $fillable = [
       'session_id','user_id', 'therapist', 'date', 'starthours','startminutes', 'startampm','endhours', 'endminutes', 'endampm' 
    ];
    public function user(){
        return $this->belongsTo(User::class);
        //this appointment class belongs to user
        //linking appoinments and users
    }
}
