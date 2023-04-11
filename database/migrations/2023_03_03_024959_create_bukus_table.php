<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_buku', 10)->nullable();
            $table->string('judul_buku', 20)->nullable();
            $table->string('pengarang_buku', 20)->nullable();
            $table->string('penerbit_buku', 20)->nullable();
            $table->string('tahun_buku', 20)->nullable();
            $table->string('jumlah_buku', 10)->nullable();
            $table->string('jumlah_eksemplar_buku', 5)->nullable();
            $table->string('status_buku', 10);
            $table->string('id_kategori_buku', 10)->nullable();
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
        Schema::dropIfExists('bukus');
    }
}
