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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->datetime('date_start');
            $table->datetime('date_finished')->nullable();
            $table->integer('exam_patient_id')->unsigned();
            $table->foreign('exam_patient_id')->references('id')->on('patient_exams');
            $table->integer('doctor_id')->unsigned()->nullable();
            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->integer('operator_id')->unsigned()->nullable();
            $table->foreign('operator_id')->references('id')->on('users');
            $table->integer('especialidade_id')->unsigned();
            $table->foreign('especialidade_id')->references('id')->on('especialidades');
            $table->json('data')->nullable();
            $table->text('file')->nullable();
            $table->enum('status', ['ativo', 'laudado', 'cancelado']);
            $table->boolean('billed_report')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');

    }
};
