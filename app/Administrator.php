<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Administrator extends Model
{
    protected $table= "administrators";

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
