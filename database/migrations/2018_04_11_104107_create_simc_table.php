<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simc', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('woj')->unsigned();
            $table->integer('pow')->unsigned();
            $table->integer('gmi')->unsigned();
            $table->integer('rodz_gmi')->unsigned();
            $table->integer('rm')->unsigned();
            $table->integer('mz')->unsigned();
            $table->string('nazwa', 64);
            $table->integer('sym');
            $table->integer('sympod');
            $table->date('stan_na');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('simc');
    }
}
