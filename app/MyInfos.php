<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myinfos extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'hope_industry' => 'nullable|string|max:50',
        'hope_job_type' => 'nullable|string|max:50',
        'what_future' => 'nullable|string',
        'strength' => 'nullable|string|max:50',
        'strength_detail' => 'nullable|string',
        'strength_job' => 'nullable|string',
        'study' => 'nullable|string|max:50',
        'study_detail' => 'nullable|string',
        'research' => 'nullable|string|max:50',
        'research_detail' => 'nullable|string',
    );
}
