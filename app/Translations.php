<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Translations extends Model
	{
	    protected $table = 'translations';
	    protected $guarded = ['id'];

	    protected $fillable = [ 'code', 'text', 'html' ];
	}
