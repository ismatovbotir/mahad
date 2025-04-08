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
        Schema::create('marks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('idx')->nullable();
            $table->foreignUuid('book_id')->contrained();
            $table->foreignUuid('library_id')->nullable()->contrained();
            $table->integer('printed')->default(0);
            $table->integer('status')->default(0);
            $table->string('shelf')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
