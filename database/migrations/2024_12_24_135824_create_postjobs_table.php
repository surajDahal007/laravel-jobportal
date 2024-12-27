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
        Schema::create('postjobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('deadline');
            $table->string('level');
            $table->integer('vacancy_no');
            $table->string('location');
            $table->string('salary');

            $table->string('education_level');
            $table->date('experience');
            $table->string('skills');
            $table->string('description');
            $table->foreignId('employer_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postjobs');
    }
};
