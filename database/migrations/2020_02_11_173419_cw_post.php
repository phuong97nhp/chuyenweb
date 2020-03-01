<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CwPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cw_posts', function (Blueprint $table) {
            $table->bigIncrements('post_id');
            $table->integer('post_catid');
            $table->string('post_title');
            $table->string('post_slug');
            $table->longText('post_detail');
            $table->string('post_type');
            $table->string('post_img');
            $table->string('post_metakey');
            $table->string('post_metadesc');
            $table->integer('post_createdby');
            $table->integer('post_updatedby');
            $table->timestamps();
            $table->integer('post_status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cw_post');
    }
}
