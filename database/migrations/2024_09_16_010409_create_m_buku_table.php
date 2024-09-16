<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_buku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nama_buku');
            $table->integer('penulis');
            $table->integer('genre');
            $table->integer('penerbit');
            $table->text('deskripsi_buku')->nullable();
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
        Schema::dropIfExists('m_buku');
    }
}
