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
        Schema::create('exam_category', function (Blueprint $table) {
            $table->id();
            $table->text('name')->unique();
            $table->integer('speciality_id')->unsigned();
            $table->foreign('speciality_id')->references('id')->on('especialidades');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_category');
    }
};
