<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class ProductsToCategories extends Model
	{
	    protected $table = 'products_to_categories';
	    protected $guarded = ['id'];
	}
