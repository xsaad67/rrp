<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemeTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meme_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fileName');
            $table->string('title');
            $table->string('slug');
            $table->boolean('isActive')->default(1)->comment("1 for active 0 for not active");
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
        Schema::dropIfExists('meme_templates');
    }
}
