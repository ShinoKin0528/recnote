<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInfomationSession extends Model
{
    protected $table = 'company_infomation_session';
    protected $guarded = array('id');

    public static $rules = array(
        'question_point' => 'nullable|string',
        'company_atmosphere' => 'nullable|string',
        'employees_atmosphere' => 'nullable|string',
        'memo' => 'nullable|string',
        'good_point' => 'nullable|string',
        'bad_point' => 'nullable|string',
        'know_more' => 'nullable|string',
    );
}
