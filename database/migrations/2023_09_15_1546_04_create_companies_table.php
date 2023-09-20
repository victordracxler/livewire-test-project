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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('razao');
            $table->string('fantasia');
            $table->string('documento')->unique();
            $table->string('phone');
            $table->string('cell');
            $table->text('address');
            $table->text('neighborhood');
            $table->string('city');
            $table->string('cep');
            $table->string('uf');
            $table->string('email');
            $table->text('representante')->nullable();
            $table->string('status');
            $table->text('complemento');
            $table->text('logo')->nullable();
            $table->enum('company_type', ['Interno', 'cliente', 'fornecedor', 'teste']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
