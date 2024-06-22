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
        Schema::create('t_invoice_detail', function (Blueprint $table) {
            $table->integer('invoice_detail_id', true);
            $table->integer('invoice_id')->index('invoice_id');
            $table->integer('token_pln_id')->index('token_pln_id');
            $table->integer('tagihan_pdam_id')->index('tagihan_pdam_id');
            $table->integer('pulsa_id')->index('pulsa_id');
            $table->timestamp('created_at')->useCurrent();
            $table->integer('created_by')->index('created_by')->comment('ini isinya user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_invoice_detail');
    }
};
