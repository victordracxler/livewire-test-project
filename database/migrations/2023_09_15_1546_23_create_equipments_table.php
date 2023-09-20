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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->integer('manufacturer_id')->unsigned();
            $table->foreign('manufacturer_id')->references('id')->on('equipment_manufacturers');
            $table->text('model_name');
            $table->datetime('date_bought');
            $table->datetime('date_delivered')->nullable();
            $table->text('asset_number');
            $table->text('serial_number');
            $table->text('equipment_type');
            $table->integer('owner')->unsigned();
            $table->foreign('owner')->references('id')->on('companies');
            $table->integer('supplier_id')->unsigned();
            $table->foreign('supplier_id')->references('id')->on('companies');
            $table->enum('status', ['Em estoque', 'Em manutenção', 'Em operação', 'Em calibração', 'Em envio']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipments');

    }
};
