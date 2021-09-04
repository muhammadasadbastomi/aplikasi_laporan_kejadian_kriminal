<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLampiranKonfliksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiran_konfliks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('konflik_id');
            $table->foreign('konflik_id')->references('id')->on('konfliks')->onDelete('cascade');
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
        Schema::dropIfExists('lampiran_konfliks');
    }
}
