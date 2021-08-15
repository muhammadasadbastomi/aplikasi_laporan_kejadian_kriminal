<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriminalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriminals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('camat_id');
            $table->foreign('camat_id')->references('id')->on('camats')->onDelete('restrict');
            $table->unsignedBigInteger('kasi_id');
            $table->foreign('kasi_id')->references('id')->on('kasis')->onDelete('restrict');
            $table->unsignedBigInteger('petugas_id');
            $table->foreign('petugas_id')->references('id')->on('petugas')->onDelete('restrict');
            $table->unsignedBigInteger('desa_id');
            $table->foreign('desa_id')->references('id')->on('desas')->onDelete('restrict');
            $table->string('no_kasus');
            $table->date('tanggal_kejadian');
            $table->string('jenis_kriminal');
            $table->string('deskripsi_kriminal');
            $table->string('pelaku');
            $table->string('korban');
            $table->string('saksi');
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
        Schema::dropIfExists('kriminals');
    }
}
