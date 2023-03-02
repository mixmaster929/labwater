<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WellsiteRealData extends Model
{
    public $table = 'wellsite_realdata';

    protected $fillable = [
        'id',
        'wellsite_id',
        'record_time',
        'value1',
        'value2',
        'value3',
        'value4'
    ];
}
