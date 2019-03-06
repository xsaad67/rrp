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
            $table->string('email')->unique();
            $table->string('slug');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text("avatar")->nullable();
            $table->text('bio')->nullable();
            $table->boolean('isAdmin')->default(0);
            $table->boolean('isActive')->default(0);
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

// https://images-na.ssl-images-amazon.com/images/I/71FsVZwmh-L._SX679_.jpg
