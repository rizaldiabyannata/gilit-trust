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
        Schema::create('detail_jasa', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->string("deskripsi");
            $table->double("harga");
            $table->String("waktu_trip");
            $table->integer("maksimal_orang");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_jasa');
    }
};
