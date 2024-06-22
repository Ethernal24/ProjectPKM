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
        Schema::create('t_invoice', function (Blueprint $table) {
            $table->integer('invoice_id', true);
            $table->integer('voucher_id')->nullable()->index('voucher_id');
            $table->string('invoice_no', 50)->comment('str random');
            $table->boolean('invoice_type')->default(true)->comment('1 = token, 2 = pulsA, 3 = pdam');
            $table->integer('invoice_total');
            $table->integer('invoice_status')->comment('1-BelumSelesai, 2-checkout, belum bayar, 3 = lunas');
            $table->timestamp('created_at')->useCurrent();
            $table->integer('created_by')->unique('user_id')->comment('ini isinya user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_invoice');
    }
};
