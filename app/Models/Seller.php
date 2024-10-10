<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    //fillable properties
    protected $fillable = [
        'firstname',
        'lastname',
        'company',
        'personalemail',
        'companymail',
        'phonenumber',
        'province',
        'district',
        'address1',
        'address2',
        'city',
        'zip',
    ];


    // In Seller.php
    public function user()
    {
        return $this->belongsTo(User::class, 'personalemail', 'email');
    }
}
