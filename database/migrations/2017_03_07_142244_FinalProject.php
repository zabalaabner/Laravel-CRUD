<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FinalProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post', function(Blueprint $table){
            $table->increments('id');
            $table->string('Fkey');
            $table->string('Username');
            $table->string('Password');
        });

        Schema::create('user_info', function(Blueprint $table){
            $table->increments('id');
            $table->string('Fkey');
            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            $table->string('Address');
            $table->integer('Age');
            $table->string('Bmonth');
            $table->integer('Bday');
            $table->integer('Byear');
            $table->string('Nationality');
        });
           
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blog_post');
        Schema::drop('user_info');
    }
}
