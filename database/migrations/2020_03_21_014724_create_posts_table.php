<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->Integer('user_id');
            $table->string('writer_name', 20);
            $table->string('title');
            $table->string('slug');
            $table->string('sub_title')->nullable();
            $table->text('post_content');
            $table->string('image');
            $table->Integer('category_id');
            $table->Integer('tag_id');
            $table->tinyInteger('updated_at');
            $table->tinyInteger('post_status');
            $table->timestamps();
            $table->Integer('view_count')->nullable();

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
