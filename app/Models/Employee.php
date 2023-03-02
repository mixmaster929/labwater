<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'suspend',
        'name',
        'email',
        'password',
        'remember_token',
        'email_verified_at',
        'company_id'
    ];
}
