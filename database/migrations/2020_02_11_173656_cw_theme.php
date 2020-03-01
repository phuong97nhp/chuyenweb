<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CwTheme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cw_theme', function (Blueprint $table) {
            $table->bigIncrements('theme_id');
            $table->string('theme_name');
            $table->string('theme_img');
            $table->string('theme_url');
            $table->timestamps();
            $table->string('theme_status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cw_theme');
    }
}
