<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class ShoppingProducts extends Model
	{
	    protected $table = 'shopping_products';
	    protected $guarded = ['id'];
	}
