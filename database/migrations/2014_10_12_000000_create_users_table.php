<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('activated')->default(false);
            $table->string('name')->nullable();
            $table->string('first_name')->default('');
            $table->string('last_name')->default('');
            $table->string('email')->unique()->nullable();
            $table->string('password', 60)->nullable();
            $table->string('profile_photo')->default('dummy.png');
            //$table->string('token');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
