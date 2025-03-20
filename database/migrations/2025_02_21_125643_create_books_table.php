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
        Schema::create('books', function (Blueprint $table) {
            $table->uuid();
            $table->string('name');
            $table->string('origin_name')->nullable();
            $table->foreingId('category_id')->nullable();
            $table->string('img')->nullable();
            $table->string('shelf')->nullable();
            $table->foreignUuid('user_id');
            $table->string('gtin')->nullable();
            $table->string('publisher')->nullable();
            $table->integer('published')->nullable();
            $table->string('cover')->default('hard');
            $table->integer('pages')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
