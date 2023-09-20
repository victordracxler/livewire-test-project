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
        Schema::create('sales_promotions', function (Blueprint $table) {
            $table->id();
            $table->integer('team_name_id')->unsigned();
            $table->foreign('team_name_id')->references('id')->on('team_names');
            $table->datetime('date_start');
            $table->datetime('date_end');
            $table->decimal('promotion_comission');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_promotions');

    }
};
