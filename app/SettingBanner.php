<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingBanner extends Model
{
    protected $fillable = [
        'image', 'startdate', 'enddate', 'status',
    ];
}
