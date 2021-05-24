<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeccionsimgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccionsimgs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('seccion_id')->unsigned();
            $table->foreign('seccion_id')->references('id')->on('seccions')->onDelete('cascade');
            $table->string('title');
            $table->string('imagen');
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
        Schema::dropIfExists('seccionsimg');
    }
}
