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
        Schema::create('members_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('member_id')->nullable();
            $table->foreignUuid('user_id')->nullable();
            $table->string('log');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members_logs');
    }
};
