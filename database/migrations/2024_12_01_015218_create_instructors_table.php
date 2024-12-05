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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id('inst_id');
            $table->string('inst_name');
            $table->string('department')->default('---');
            $table->integer('total_evaluation')->default(0);
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
        Schema::dropIfExists('instructors');
    }
};
