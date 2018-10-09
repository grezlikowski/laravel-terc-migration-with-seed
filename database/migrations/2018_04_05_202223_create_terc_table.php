<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTercTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terc', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('woj')->unsigned();
            $table->integer('pow')->unsigned()->nullable($value = true);
            $table->integer('gmi')->unsigned()->nullable($value = true);
            $table->integer('rodz')->unsigned()->nullable($value = true);
            $table->string('nazwa', 100);
            $table->string('nazwa_dod', 50);
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
        Schema::dropIfExists('terc');
    }
}
