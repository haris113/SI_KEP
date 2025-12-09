<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('role', function (Blueprint $table) {
        $table->id('id_role');
        $table->string('role');
        $table->timestamps();
    });

    Schema::create('foto', function (Blueprint $table) {
    $table->id('id_foto');
    $table->string('foto');
    $table->enum('jenis', ['user', 'anggota', 'kegiatan'])->nullable();
    $table->timestamps();
});

    Schema::create('user', function (Blueprint $table) {
        $table->id('id_user');
        $table->string('username')->unique();
        $table->string('password');
        $table->string('nama');
        $table->unsignedBigInteger('id_role');
        $table->unsignedBigInteger('id_foto')->nullable();
        $table->timestamps();

        $table->foreign('id_role')->references('id_role')->on('role')->cascadeOnDelete();
        $table->foreign('id_foto')->references('id_foto')->on('foto')->nullOnDelete();
    });

    Schema::create('anggota', function (Blueprint $table) {
        $table->id('id_anggota');
        $table->string('nama');
        $table->string('alamat');
        $table->string('no_hp');
        $table->unsignedBigInteger('id_foto')->nullable();
        $table->string('jabatan')->nullable();
        $table->date('tanggal_bergabung')->nullable();
        $table->timestamps();

        $table->foreign('id_role')->references('id_role')->on('role')->cascadeOnDelete();
        $table->foreign('id_foto')->references('id_foto')->on('foto')->nullOnDelete();
    });

    Schema::create('kegiatan', function (Blueprint $table) {
        $table->id('id_kegiatan');
        $table->string('nama_kegiatan');
        $table->text('keterangan')->nullable();
        $table->unsignedBigInteger('id_foto')->nullable();
        $table->timestamps();

        $table->foreign('id_foto')->references('id_foto')->on('foto')->nullOnDelete();
    });

    Schema::create('kelembagaan', function (Blueprint $table) {
        $table->id('id_lembaga');
        $table->string('nama_lembaga');
        $table->string('jenis_lembaga');
        $table->string('alamat');
        $table->string('tahun_berdiri')->nullable();
        $table->string('status_lembaga')->nullable();
        $table->string('nomer_registrasi')->nullable();
        $table->date('tanggal_terdaftar')->nullable();
        $table->text('keterangan')->nullable();
        $table->timestamps();
    });

    Schema::create('arsip_dokumen', function (Blueprint $table) {
        $table->id('id_arsip');
        $table->string('nama_dokumen');
        $table->string('file_path');
        $table->text('keterangan')->nullable();
        $table->timestamps();
    });

    Schema::create('alsintan', function (Blueprint $table) {
        $table->id('id_alsintan');
        $table->string('nama_alat');
        $table->string('jenis_alat');
        $table->string('merk')->nullable();
        $table->string('tahun_perolehan')->nullable();
        $table->string('kondisi')->nullable();
        $table->string('sumber_perolehan')->nullable();
        $table->timestamps();
    });

    Schema::create('penggunaan_alsintan', function (Blueprint $table) {
        $table->id('id_penggunaan');
        $table->unsignedBigInteger('id_alsintan');
        $table->unsignedBigInteger('id_anggota')->nullable();
        $table->string('nama_pelanggan')->nullable();
        $table->date('tanggal_mulai')->nullable();
        $table->date('tanggal_selesai')->nullable();
        $table->string('lokasi_lahan')->nullable();
        $table->string('luas_lahan')->nullable();
        $table->string('hasil_panen')->nullable();
        $table->string('status')->nullable();
        $table->timestamps();

        $table->foreign('id_alsintan')->references('id_alsintan')->on('alsintan')->cascadeOnDelete();
        $table->foreign('id_anggota')->references('id_anggota')->on('anggota')->nullOnDelete();
    });

    Schema::create('laporan_upja', function (Blueprint $table) {
        $table->id('id_laporan');
        $table->string('periode');
        $table->date('tanggal_laporan');
        $table->double('total_pendapatan')->default(0);
        $table->double('total_pengeluaran')->default(0);
        $table->unsignedBigInteger('dibuat_oleh');
        $table->timestamps();

        $table->foreign('dibuat_oleh')->references('id_user')->on('user')->cascadeOnDelete();
    });

    Schema::create('penyusutan', function (Blueprint $table) {
        $table->id('id_penyusutan');
        $table->unsignedBigInteger('id_alsintan');
        $table->string('tahun');
        $table->double('nilai_perolehan')->default(0);
        $table->double('nilai_penyusutan')->default(0);
        $table->integer('frekuensi')->default(0);
        $table->date('tanggal_dibuat')->nullable();
        $table->timestamps();

        $table->foreign('id_alsintan')->references('id_alsintan')->on('alsintan')->cascadeOnDelete();
    });

    Schema::create('laporan_keuangan', function (Blueprint $table) {
        $table->id('id_transaksi');
        $table->double('jumlah');
        $table->string('jenis');
        $table->date('tanggal');
        $table->string('keterangan')->nullable();
        $table->double('total');
        $table->timestamps();
    });

    Schema::create('pinjaman', function (Blueprint $table) {
        $table->id('id_pinjaman');
        $table->unsignedBigInteger('id_anggota');
        $table->double('jumlah');
        $table->date('tanggal');
        $table->string('keterangan')->nullable();
        $table->string('status');
        $table->timestamps();

        $table->foreign('id_anggota')->references('id_anggota')->on('anggota')->cascadeOnDelete();
    });

    Schema::create('saldo', function (Blueprint $table) {
        $table->id('id_saldo');
        $table->double('saldo')->default(0);
        $table->timestamps();
    });

    Schema::create('perawatan', function (Blueprint $table) {
        $table->id('id_perawatan');
        $table->unsignedBigInteger('id_alsintan');
        $table->date('tanggal_perawatan');
        $table->string('jenis_perawatan');
        $table->double('biaya')->default(0);
        $table->unsignedBigInteger('id_saldo')->nullable();
        $table->text('keterangan')->nullable();
        $table->timestamps();

        $table->foreign('id_alsintan')->references('id_alsintan')->on('alsintan')->cascadeOnDelete();
        $table->foreign('id_saldo')->references('id_saldo')->on('saldo')->nullOnDelete();
    });
}

public function down()
{
    Schema::dropIfExists('perawatan');
    Schema::dropIfExists('saldo');
    Schema::dropIfExists('pinjaman');
    Schema::dropIfExists('laporan_keuangan');
    Schema::dropIfExists('penyusutan');
    Schema::dropIfExists('laporan_upja');
    Schema::dropIfExists('penggunaan_alsintan');
    Schema::dropIfExists('alsintan');
    Schema::dropIfExists('arsip_dokumen');
    Schema::dropIfExists('kelembagaan');
    Schema::dropIfExists('kegiatan');
    Schema::dropIfExists('anggota');
    Schema::dropIfExists('user');
    Schema::dropIfExists('foto');
    Schema::dropIfExists('role');
}

};
