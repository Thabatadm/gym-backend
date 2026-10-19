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
        Schema::create('class_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('center_id')->constrained()->onDelete('cascade');
            $table->foreignId('teacher_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->dateTime('schedule');
            $table->integer('capacity');
            $table->enum('status', ['AVAILABLE', 'FULL', 'CANCELLED'])->default('AVAILABLE');
            $table-> enum('class_type', ['YOGA','BOXING','BODYPUMP', 'PILATES', 'CROSSFIT', 'SPINNING', 'ZUMBA']);
            $table->string('room');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_sessions');
    }
};
