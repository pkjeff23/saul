<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesimgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicesimg', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('services_id')->unsigned();
            $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');
            $table->string('title');
            $table->string('description');
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
        Schema::dropIfExists('servicesimg');
    }
}
