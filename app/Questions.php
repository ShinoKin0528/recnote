<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions';
    protected $guarded = array('id');

    public static $rules = array(
        'questions' => 'nullable|string',
    );
}
