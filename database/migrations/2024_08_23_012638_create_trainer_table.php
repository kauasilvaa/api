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
        Schema::create('trainer', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('years');
            $table->string('height');
            $table->string('weight');
            $table->string('cpf');
            $table->string('rg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainer');
    }
};
