<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Health;
use App\Session;
use App\Appointment;
use App\Note;
use App\Message;
use App\Therapistbio;
use App\Post;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','is_admin', 'phone_number','nationalID', 'gender', 'age' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function health(){
        return $this->hasOne(Health::class);
    }
    public function session(){
        return $this->hasOne(Session::class);
    }
    public function appointment(){
        return $this->hasOne(Appointment::class);
    }
    public function notes(){
        return $this->hasOne(Note::class);
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function therapistbio()
    {
        return $this->hasOne(Therapistbio::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
