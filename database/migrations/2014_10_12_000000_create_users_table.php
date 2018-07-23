<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->string('fullName');
            $table->string('city')->nullable();;
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('type', [0, 1, 2]);
            $table->year('year')->nullable();
            $table->float('weight')->nullable();
            $table->float('height')->nullable();
            $table->string('phone')->nullable();
            $table->string('job')->nullable();
            $table->string('stars')->nullable();
            $table->string('lang')->nullable();
            $table->boolean('status');
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
        Schema::dropIfExists('users');
    }
}
