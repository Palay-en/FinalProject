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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id('evaluation_id');
            $table->foreignId(column: 'user_id')->constrained();
            $table->integer('instructor_id')->default(0);
            $table->integer('score_ones')->default(0);
            $table->integer('score_twos')->default(0);
            $table->integer('score_threes')->default(0);
            $table->integer('score_fours')->default(0);
            $table->integer('score_fives')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
