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
        Schema::create('m_cust_pdam', function (Blueprint $table) {
            $table->integer('cust_pdam_id', true);
            $table->integer('cust_pdam_no');
            $table->string('gol_pdam', 50)->default('');
            $table->string('cust_pdam_nama', 50);
            $table->string('cust_pdam_alamat', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_cust_pdam');
    }
};
