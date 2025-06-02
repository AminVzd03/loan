<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Loan\src\Enum\LoanStatus;

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
            $table->integer('interest_rate')->nullable();
            $table->integer('interest_period')->nullable();
            $table->integer('installment_period')->nullable();
            $table->json('installment_ids')->nullable();
            $table->integer('installment_amount')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->enum('status', LoanStatus::values())->default(LoanStatus::PENDING->value);

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
