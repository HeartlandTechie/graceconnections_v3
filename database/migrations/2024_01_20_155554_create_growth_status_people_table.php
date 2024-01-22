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
        Schema::create('growth_status_person', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id');
            $table->foreignId('growth_status_id');
            $table->foreign('person_id')->references('id')
                ->on('people')->onDelete('cascade');
            $table->foreign('growth_status_id')->references('id')
                ->on('growth_statuses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('growth_status_person');
    }
};
