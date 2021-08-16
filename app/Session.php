<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Session extends Model
{
    protected $fillable = [
        'user_id','is_booked', 'date', 'starthours','startminutes', 'startampm','endhours', 'endminutes', 'endampm' 
    ];
    public function user(){
        return $this->belongsTo(User::class);
        //the health class belongs to user
    }
}
