<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    //table name
    protected $table = 'posts';
    //Specifying the primary key
    public $primaryKey = 'id';
    //specifying the timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
