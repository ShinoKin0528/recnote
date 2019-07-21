<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecruitementInfo extends Model
{
    protected $table = 'recruitement_info';
    protected $guarded = array('id');

    public static $rules = array(
        'apply_jobtype' => 'nullable|string|max:150',
        'interview_times' => 'nullable|string|max:150',
        'want_people' => 'nullable|string',
        'want_skills' => 'nullable|string',
        'test_info' => 'nullable|string',
        'handin_documents' => 'nullable|string',
        'aspiration_motive' => 'nullable|string',
        'pr_point' => 'nullable|string',
        'memo' => 'nullable|string',
    );
}
