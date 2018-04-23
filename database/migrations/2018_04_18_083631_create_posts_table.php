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
            $table->integer('tid')->index()->comment('分类标签id');
            $table->string('title')->index()->comment('标题');
            $table->string('thumbnail')->nullable();
            $table->string('summary')->nullable();
            $table->longText('content')->comment('正文');
            $table->string('author')->default('佚名');
            $table->integer('visited_count')->default(0);
            $table->integer('fab_count')->default(0)->comment('点赞数');
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
