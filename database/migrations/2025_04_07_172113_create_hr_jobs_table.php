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
        Schema::create('hr_jobs', function (Blueprint $table) {
            $table->id('job_id');
            $table->string('job_title', 35);
            $table->decimal('min_salary', 8, 2 )->nullable();
            $table->decimal('max_salary', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_jobs');
    }
};
