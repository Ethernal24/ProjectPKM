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
        Schema::create('t_tagihan_pdam', function (Blueprint $table) {
            $table->integer('tagihan_pdam_id', true);
            $table->integer('cust_pdam_id')->index('cust_pdam_id');
            $table->string('tagihan_pdam_periode')->comment('Y-m');
            $table->string('tagihan_pdam_total', 50);
            $table->integer('tagian_pdam_meter');
            $table->integer('tagihan_pdam_status')->comment('1-Belumselesai, 2-selesai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_tagihan_pdam');
    }
};
