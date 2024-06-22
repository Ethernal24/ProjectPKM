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
        Schema::create('m_voucher', function (Blueprint $table) {
            $table->increments('voucher_id');
            $table->integer('user_id');
            $table->boolean('is_redeemed')->default(true)->comment('1 = belum dipake, 2 = sudah terpakai');
            $table->timestamp('redeemed_at')->nullable();
            $table->bigInteger('voucher_nominal_diskon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_voucher');
    }
};
