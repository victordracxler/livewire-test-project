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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cpf')->nullable();
            $table->rememberToken();
            $table->text('image')->nullable();
            $table->integer('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles'); 
            $table->integer('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies');         
            $table->text('email_signature')->nullable();
            $table->timestamps();
            $table->softDeletes();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
