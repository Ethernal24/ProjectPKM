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
        Schema::create('m_token_pln', function (Blueprint $table) {
            $table->integer('token_pln_id', true);
            $table->integer('token_pln_no');
            $table->integer('token_pln_nominal');
            $table->integer('token_pln_kode');
            $table->integer('token_pln_status')->comment('1-BelumTerpakai, 2-Booking, 3-UdahTerpakai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_token_pln');
    }
};
