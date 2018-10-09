<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUlicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ulic', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('woj')->unsigned();
            $table->integer('pow')->unsigned();
            $table->integer('gmi')->unsigned();
            $table->integer('rodz_gmi')->unsigned();
            $table->integer('sym')->unsigned();
            $table->integer('sym_ul')->unsigned();
            $table->string('cecha', 8);
            $table->string('nazwa_1', 128);
            $table->string('nazwa_2', 64);
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
        Schema::dropIfExists('ulic');
    }
}
