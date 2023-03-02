<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Wellsite extends Model
{
    use SoftDeletes;

    public $table = 'wellsites';

    protected $fillable = [
        'id',
        'name',
        'status',
        'address',
        'info',
        'company_id',
        'value1',
        'value2',
        'value3',
        'value4',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
