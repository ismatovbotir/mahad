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
        Schema::create('members', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('surename');
            $table->string('email')->nullable();
            $table->foreignId('role_id')->default(6);
            $table->foreignId('course_id')->nullable();
            $table->string('phone')->nullable();
            $table->date('bday')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
