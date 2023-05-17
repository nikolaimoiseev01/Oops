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
        Schema::create('good_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('good_id');
            $table->string('shop');
            $table->string('user_name');
            $table->date('date');
            $table->integer('rating');
            $table->text('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('good_reviews');
    }
};
