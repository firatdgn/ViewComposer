<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Socialmedias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_media', function($table) {
        	$table->increments('id');
        	$table->string('name', 128);
        	$table->string('icon', 128);
        	$table->string('value', 128);
        	$table->timestamps();
        });

        \App\SocialMedia::create([
        	'name' => 'Instagram',
        	'icon' => 'fa-instagram',
        	'value' => 'nuh_orun'
        ]);

        \App\SocialMedia::create([
        	'name' => 'Linkedin',
        	'icon' => 'fa-linkedin',
        	'value' => 'https://linkedin.com/nuhorun'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
