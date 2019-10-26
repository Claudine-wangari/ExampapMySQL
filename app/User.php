<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function administrator()
    {
        return $this->hasMany(Administrator::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','role'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
