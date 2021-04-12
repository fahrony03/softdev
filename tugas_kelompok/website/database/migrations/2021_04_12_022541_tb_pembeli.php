<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbPembeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pembeli', function (Blueprint $table) {
            $table->id('id_pembeli');
            $table->string('nama_pembeli');
            $table->string('no_telepon');
            $table->string('alamat');
            $table->timestamp('time')->default(now());
            $table->enum('level', ['L', 'P']);
            $table->string('password');
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
        Schema::dropIfExists('tb_pembeli');
    }
}
