<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('slug');
            $table->boolean('isGuest')->default(0);
            $table->string('template_id')->nullable()->comment("reference meme templates data");
            $table->integer('user_id')->nullable();
            $table->text('body')->nullable();
            $table->text('image')->nullable();
            $table->boolean('isPublished')->default(1)->comment("0 for not published, 1 for published");
            $table->string('source')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
