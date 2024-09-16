<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMDetailUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_detail_users', function (Blueprint $table) {
                $table->bigIncrements('id_detail_user');
                $table->unsignedBigInteger('id_user');
                $table->string('no_telp');
                $table->integer('role');
                $table->time('alamat')->nullable();
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
        Schema::dropIfExists('m_detail_users');
    }
}
