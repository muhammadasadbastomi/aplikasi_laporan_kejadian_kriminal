<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLampiranGangguansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiran_gangguans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gangguan_id');
            $table->foreign('gangguan_id')->references('id')->on('gangguans')->onDelete('cascade');
            $table->string('lampiran');
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
        Schema::dropIfExists('lampiran_gangguans');
    }
}
