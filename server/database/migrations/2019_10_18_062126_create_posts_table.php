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
            $table->increments('id')->comment('ID');
            $table->unsignedInteger('user_id')->comment('投稿者のID');
            $table->string('title', 50)->comment('タイトル');
            $table->text('body')->comment('中身の文章');
            $table->datetime('created_at')->comment('作成日');
        });
        DB::statement("ALTER TABLE `posts` COMMENT '投稿詳細'");
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
