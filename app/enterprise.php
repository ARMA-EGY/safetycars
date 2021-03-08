<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enterprise extends Model
{
	protected $table = 'enterprise';
    protected $fillable = [
        'name','email','phone','company','device_num'
    ];
}
