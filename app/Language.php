<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Language extends Model
	{
	    protected $table = 'language';
	    protected $guarded = ['id'];

	    protected $fillable = [ 'code', 'text', 'html' ];
	}
