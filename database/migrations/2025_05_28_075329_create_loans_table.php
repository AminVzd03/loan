<?php

use App\Enums\LoanStatus;
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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->integer('interest_rate');
            $table->integer('interest_period');
            $table->integer('installment_period');
            $table->json('installment_ids');
            $table->integer('installment_amount');
            //$table->foreignId('user_id')->constrained('users');
            $table->enum('status', LoanStatus::values());

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
