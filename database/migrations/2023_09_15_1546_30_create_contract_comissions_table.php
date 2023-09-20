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
        Schema::create('contract_comissions', function (Blueprint $table) {
            $table->id();
            $table->integer('contract_id')->unsigned();
            $table->foreign('contract_id')->references('id')->on('contracts');
            $table->integer('seller_id')->unsigned()->nullable();
            $table->foreign('seller_id')->references('id')->on('users');
            $table->decimal('seller_comission')->nullable();
            $table->integer('supervisor_id')->unsigned()->nullable();
            $table->foreign('supervisor_id')->references('id')->on('users');
            $table->decimal('supervisor_comission')->nullable();
            $table->integer('manager_id')->unsigned()->nullable();
            $table->foreign('manager_id')->references('id')->on('users');
            $table->decimal('manager_comission')->nullable();
            $table->integer('director_id')->unsigned()->nullable();
            $table->foreign('director_id')->references('id')->on('users');
            $table->decimal('director_comission')->nullable();
            $table->integer('representante_id')->unsigned()->nullable();
            $table->foreign('representante_id')->references('id')->on('users');
            $table->decimal('rep_comission')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract_comissions');

    }
};
