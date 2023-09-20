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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('cpf')->unique();
            $table->text('gender');
            $table->date('birthdate');
            $table->text('email');
            $table->datetime('date_registered');
            $table->text('father')->nullable();
            $table->text('mother')->nullable();
            $table->text('phone');
            $table->text('allergies')->nullable();
            $table->text('state');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
