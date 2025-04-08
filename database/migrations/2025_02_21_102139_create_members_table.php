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
            $table->uuid('id')->primary();
            $table->string('card')->nullable();
            //$table->uuid('created_by');
            //$table->foreign('created_by')->references('users')->on('id');
            $table->foreignUuid('user_id')->nullable()->contrained();
            $table->string('name');
            $table->string('surename');
            $table->string('patronymic')->nullable();
            $table->string('passport');
            $table->string('email')->nullable();
            $table->foreignId('role_id')->default(6)->contrained();
            $table->foreignId('course_id')->nullable();
            $table->string('phone')->nullable();
            $table->date('bday')->nullable();
            $table->string('img')->nullable();
            $table->string('address')->nullable();
            $table->integer('status')->default('1');

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
