<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Use the correct base class
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable; // Include any necessary traits

    // If you need, you can add fillable fields
    protected $fillable = [
        'name',
        'email',
        'phonenumber',
        'dob',
        'password',
    ];

    // For hidden fields in the user instance
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
