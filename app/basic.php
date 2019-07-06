<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    protected $table = 'basics';
    protected $guarded = array('id', 'company_id');

    public static $rules = array(
        'website_url' => 'required|nullable|url|max:50',
        'founding_year' => 'nullable|integer|digits_between:3,4',
        'capital' => 'nullable|numeric|digits_between:0,15',
        'representative' => 'nullable|string|max:30',
        'employees_number' => 'nullable|integer|digits_between:0,20',
        'headoffice_place' => 'nullable|string|max:50',
        'headoffice_postalcode_first' => 'nullable|integer|digits:3',
        'headoffice_postalcode_last' => 'nullable|integer|digits:4',
        'headoffice_address' => 'nullable|string|max:50',
        'stock_listing' => 'nullable|string',
        'memo' => 'nullable|string'
    );
}
