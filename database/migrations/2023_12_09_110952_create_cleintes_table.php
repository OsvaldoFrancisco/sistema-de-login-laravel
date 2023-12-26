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
        Schema::create('cleintes', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:'user_id')->constrained();
            $table->string(column:'nome');
            $table->string(column:'email');
            $table->string(column:'telemovel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cleintes');
    }
};
