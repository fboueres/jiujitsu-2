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
        Schema::create('student_student_responsible', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->foreignUuid('student_uuid')->constrained()->cascadeOnDelete();
            $table->foreignUuid('student_responsible_uuid')->constrained()->cascadeOnDelete();
            $table->string('filliation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_student_responsible');
    }
};
