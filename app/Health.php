<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Health extends Model
{
    //
    protected $fillable = [
        'user_id', 'anxiety', 'depression','guilt', 'fear','suicidal', 'physicalabuse', 'sexualabuse', 'psychologicalabuse', 'deprivation', 'previouscounselling' 
    ];
    public function user(){
        return $this->belongsTo(User::class);
        //the health class belongs to user
    }

}
