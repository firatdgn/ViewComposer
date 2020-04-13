<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'modules';
    protected $guarded = ['id'];

    protected $fillable = [
    	'value', 'active'
    ];
}
