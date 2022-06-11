<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id'); //ambil data dari id tabel gurus
            // $table->string('mapel');
            $table->string('materi');
            $table->enum('darijam', ['jam ke-1', 'jam ke-2', 'jam ke-3', 'jam ke-4', 'jam ke-5', 'jam ke-6', 'jam ke-7', 'jam ke-8', 'jam ke-9']);
            $table->enum('sampaijam', ['jam ke-1', 'jam ke-2', 'jam ke-3','jam ke-4', 'jam ke-5', 'jam ke-6', 'jam ke-7', 'jam ke-8', 'jam ke-9']);
            $table->string('absensi');
            $table->foreignId('kelas_id'); //ambil data dari id tabel kelas
            $table->enum('metode', ['online', 'offline']);
            $table->string('link_belajar');
            $table->string('screenshot');
            $table->string('keterangan');
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
        Schema::dropIfExists('agendas');
    }
};
