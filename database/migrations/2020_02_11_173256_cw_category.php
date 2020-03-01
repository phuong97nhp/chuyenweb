<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CwCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cw_category', function (Blueprint $table) {
            $table->bigIncrements('category_id');
            $table->string('category_name');
            $table->string('category_img');
            $table->string('category_slug');
            $table->integer('category_parentid');
            $table->string('category_type');
            $table->string('category_metakey');
            $table->string('category_metadesc');
            $table->integer('category_createdby');
            $table->integer('category_updatedby');
            $table->timestamps();
            $table->integer('category_status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cw_category');
    }
}
