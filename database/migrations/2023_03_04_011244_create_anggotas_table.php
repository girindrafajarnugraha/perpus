<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_anggota', 10)->nullable();
            // $table->string('username_anggota', 20)->nullable();
            // $table->string('password_anggota', 50)->nullable();
            $table->string('nama_anggota', 50)->nullable();
            $table->string('kelas_anggota', 10)->nullable();
            $table->enum('jenis_kelamin_anggota', ['Laki-laki', 'Perempuan'])->nullable();
            $table->date('tanggal_lahir_anggota')->nullable();
            $table->string('email_anggota', 10)->nullable();
            $table->string('no_telpon_anggota', 13)->nullable();
            $table->string('alamat_anggota', 10)->nullable();
            $table->enum('status_pinjam', ['Bebas', 'Tertanggung'])->nullable();
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
        Schema::dropIfExists('anggotas');
    }
}
