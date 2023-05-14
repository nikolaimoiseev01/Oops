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
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('good_category_id');
            $table->json('properties');
            $table->json('advantages');
            $table->text('desc');
            $table->text('compound');
            $table->text('instruction');
            $table->float('capacity');
            $table->string('capacity_type');
            $table->json('links');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goods');
    }
};
