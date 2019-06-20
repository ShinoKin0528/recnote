<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'company_name' => 'required',
        'hitokoto' => 'required',
        'industry' => 'required',
        'jobtype' => 'required',
        'status' => 'required',
        'userid' => 'integer',
    );

    public function getUserid()
    {
        return $this->id;
    }
}
