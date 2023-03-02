<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWellsiteRealdataPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wellsite_realdata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('wellsite_id');
            $table->foreign('wellsite_id')->references('id')->on('wellsites')->onDelete('cascade');
            $table->date('record_time')->nullable();
            $table->string('value1')->nullable();
            $table->string('value2')->nullable();
            $table->string('value3')->nullable();
            $table->string('value4')->nullable();
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
        Schema::dropIfExists('wellsite_realdata');
    }
}
