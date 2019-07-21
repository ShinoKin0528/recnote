<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Welfare extends Model
{
    protected $table = 'welfare';
    protected $guarded = array('id');

    public static $rules = array(
        'starting_salary' => 'nullable|numeric|digits_between:0,15',
        'holidays' => 'nullable|string|max:150',
        'paid_vacation' => 'nullable|string|max:150',
        'overtime' => 'nullable|string|max:150',
        'holidays_format' => 'nullable|string',
        'holidays_system' => 'nullable|string',
        'working_hours' => 'nullable|string',
        'social_insurance' => 'nullable|string',
        'allowance' => 'nullable|string',
        'education' => 'nullable|string',
        'get_license' => 'nullable|string',
        'memo' => 'nullable|string'
    );
}
