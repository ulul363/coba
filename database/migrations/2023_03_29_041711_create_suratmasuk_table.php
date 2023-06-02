<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('suratmasuk', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nomor', 30)->nullable(false);
            $table->date('tanggal')->nullable();

            // no_surat untuk sekretaris sendiri
            $table->string('no_surat', 30)->nullable();
            // tgl masuk
            $table->date('tgl_msk', )->nullable();
            $table->string('perihal', 30)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratmasuk');
    }
};
