<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    protected $table = 'modules';
    protected $guarded = ['id'];

    protected $fillable = [ 'name', 'is_loaded', 'is_dropped', 'is_needed_reflesh', 'is_active', 'manage_url' ];
}
