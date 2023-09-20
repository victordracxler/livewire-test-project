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
        Schema::create('exam_files', function (Blueprint $table) {
            $table->id();
            $table->integer('exam_patient_id')->unsigned();
            $table->foreign('exam_patient_id')->references('id')->on('patient_exams');
            $table->text('file');
            $table->integer('file_size');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_files');

    }
};
