<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_films', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title");
            $table->string("image");
            $table->integer("janrs_id");
            $table->string("description");
            $table->string("IMDB");
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
        Schema::dropIfExists('create_films');
    }
}
