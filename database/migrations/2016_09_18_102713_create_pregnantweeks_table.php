<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePregnantweeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregnantweeks', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('slug');
            $table->string('background_img_url')->nullable();
            $table->string('header_text');
            $table->text('header_par');

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
        Schema::dropIfExists('pregnantweeks');
    }
}
