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
        Schema::create('contract_exams', function (Blueprint $table) {
            $table->id();
            $table->integer('exam_id')->unsigned();
            $table->foreign('exam_id')->references('id')->on('exams');
            $table->integer('quantity');
            $table->enum('quantity_type', ['Incidência', 'Exame']);
            $table->integer('contract_id')->unsigned();
            $table->foreign('contract_id')->references('id')->on('contracts');
            $table->date('validity_begin');
            $table->date('validity_end')->nullable();
            $table->boolean('active');
            $table->integer('unitary_price');
            $table->integer('excess_price');
            $table->enum('exam_modality', ['Clínico', 'SUS', 'Ocupacional']);
            $table->enum('billing_method', ['Livre', 'Amarrado']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract_exams');

    }
};
