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
        Schema::create('student_responsibles', function (Blueprint $table) {
            $table->uuid()->primary();

            $table->string('cpf');
            $table->string('name');
            $table->date('birth_date');
            $table->enum('gender', ['M', 'F']);
            
            $table->string('email');
            
            $table->string('phone_number')->nullable();
            
            $table->date('enrollment_date');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_responsibles');
    }
};
