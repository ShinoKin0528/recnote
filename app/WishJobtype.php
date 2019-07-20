<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishJobtype extends Model
{
    protected $table = 'wish_jobtype';
    protected $guarded = array('id');

    public static $rules = array(
        'wish_jobtype' => 'nullable|string|max:150',
        'jobtype_detail' => 'nullable|string',
        'want_jobtype' => 'nullable|string',
        'can_jobtype' => 'nullable|string',
        'memo' => 'nullable|string'
    );
}
