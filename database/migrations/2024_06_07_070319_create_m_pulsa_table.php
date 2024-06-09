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
        Schema::create('m_pulsa', function (Blueprint $table) {
            $table->integer('pulsa_id', true);
            $table->integer('provider_id')->index('id_provider');
            $table->integer('pulsa_nominal');
            $table->integer('pulsa_status')->comment('1-BelumTerpakai, 2-Booking, 3-UdahTerpakai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_pulsa');
    }
};
