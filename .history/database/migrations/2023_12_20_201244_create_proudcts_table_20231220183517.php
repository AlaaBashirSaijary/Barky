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
        Schema::create('proudcts', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('image');
            $table->string('subtitle');
            $table->string('price');
            $table->string('descrption');
            $t
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proudcts');
    }
};
