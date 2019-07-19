<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'detail';
    protected $guarded = array('id');

    public static $rules = array(
        'corporate_philosophy' => 'nullable|string|max:150',
        'service_product' => 'nullable|string',
        'to_client' => 'nullable|string|max:150',
        'uniqueness' => 'nullable|string',
        'future' => 'nullable|string',
        'important_point' => 'nullable|string',
        'feel_value' => 'nullable|string',
        'give_my_value' => 'nullable|string',
        'company_task' => 'nullable|string',
        'memo' => 'nullable|string'
    );
}
