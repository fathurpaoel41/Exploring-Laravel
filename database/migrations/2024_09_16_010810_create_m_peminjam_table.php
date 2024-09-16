<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMPeminjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_peminjam', function (Blueprint $table) {
            $table->bigIncrements('id_peminjam');
            $table->bigInteger('nama_peminjam');
            $table->bigInteger('buku_pinjam');
            $table->date('tanggal_dipinjam');
            $table->date('tanggal_batas_peminjam')->nullable();
            $table->date('tanggal_dikembalikan')->nullable();
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
        Schema::dropIfExists('m_peminjam');
    }
}
