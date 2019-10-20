<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->unsignedInteger('user_id')->comment('投稿者のID');
            $table->unsignedInteger('post_id')->comment('投稿のID');
            $table->text('body')->comment('コメントの中身');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `comments` COMMENT 'コメント詳細'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
