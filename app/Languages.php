<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Languages extends Model
	{
	    protected $table = 'languages';
	    protected $guarded = ['id'];

	    protected $fillable = [ 'name', 'code', 'text', 'html' ];
	}
