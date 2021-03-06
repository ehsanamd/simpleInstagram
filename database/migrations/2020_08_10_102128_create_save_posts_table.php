<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save_posts', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('account_id');
          $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
          $table->unsignedBigInteger('post_id');
          $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
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
        Schema::dropIfExists('save_posts');
    }
}
