<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CwMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('cw_menu', function (Blueprint $table) {
            $table->bigIncrements('menu_id');
            $table->string('menu_name');
            $table->string('menu_type');
            $table->string('menu_img');
            $table->string('menu_url');
            $table->integer('menu_tableid');
            $table->integer('menu_parentid');
            $table->integer('menu_order');
            $table->timestamps();
            $table->string('menu_status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cw_menu');
    }
}
